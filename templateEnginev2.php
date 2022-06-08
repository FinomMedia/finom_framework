<?php 


	class MyTemplate{
		protected $path, $data;

		public function __construct($path, $data){
			$this->path = $path;

			/*$data["page"] = wire()->page;
			$data["user"] = wire()->user;
			$data["happ"] = wire()->happ;
*/
			$this->data = $data;
			
		}

		public function render(){
			//echo $this->path;
			//echo __DIR__ . "$this->path";

            //var_dump($this->data);

			if(file_exists($this->path)){
				extract($this->data);
				ob_start();

				include $this->path;
				$buffer = ob_get_contents();
				@ob_end_clean();
				return $buffer;
			}
			else{
				echo "error v šabloně - neexistující soubor se šablonou";
				die;
			}
		}
	}



    
    function componentV2($name, $componentData = false){
        
        $names = explode(".",$name);
 

        if($names[0]=="custom" || $names[0]=="site"){
            $componentPath = Site::siteComponentPath().$names[1]."/";
            array_shift($names);
            $name = implode(".",$names);
        }
        else{            
            $componentPath = Site::rootComponentPath().$names[0]."/";
        }

        

        
        if(!$componentData){
          /*  $dataFile =  $componentPath."/default.json";
            $data = json_decode(file_get_contents($dataFile));*/
        }
        else{

            if(is_object($componentData)){
                $componentData = get_object_vars($componentData);
            }
            elseif(is_array($componentData)){

            }
            else{
                $componentData = array("prop"=>$componentData);
            }
            
                    
        }

        $fullpath = $componentPath."".$name.".php";
                
        $tmpl = new MyTemplate($fullpath,$componentData);
    
        echo $tmpl->render();
        
        
    }



	class Templater {

		public static $sections = array();
		public static $partials = array();

		public static function partialBegin(){
			sectionStart();
		}

		public static function partialEnd($name,$render = false){
			$content = sectionEnd();

			self::addPartial($name,$content);

			if($render){
				echo $content ;
			};
		}

		public static function addPartial($name,$content){
			self::$partials[$name] = $content; 
		}

		public static function getPartial($name){
			
			return self::$partials[$name];

		}

	}

    
	function sectionStart(){
		ob_start();
	}

	function sectionEnd(){
		$buffer = ob_get_contents();
		@ob_end_clean();
		return $buffer;
	}
