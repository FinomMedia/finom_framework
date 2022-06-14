<?php namespace ProcessWire;

use function ProcessWire\repeaterItemsToTree as ProcessWireRepeaterItemsToTree;

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

        echo Templater::getPartial("html");
        
        
    }


	class Templater {

		public static $sections = array();
		public static $partials = array();

		public static $partials_lifo = array();
		
		public static $slots = array();
		public static $slots_lifo = array();

		public static $current_partial;

		public static function partialBegin($name){
			self::$partials_lifo[]=$name;
			sectionStart();
		}


		public static function currentPartial(){
			if(count(self::$partials_lifo)==0){
				return false;
			}
			else {
				return self::$partials_lifo[count(self::$partials_lifo)-1];
			}
		}

		public static function partialEnd(){
			$content = sectionEnd();

			$name = array_pop(self::$partials_lifo);
			self::$slots_lifo = array();
			//self::$slots = array();
			self::addPartial($name,$content);

			return $content;
		}

		public static function slotOpen($name){
			self::$slots_lifo[]=$name;
			sectionStart();
		}

		public static function slotClose(){
			
			$content = sectionEnd();
			$name = array_pop(self::$slots_lifo);

			self::addSlot($name,$content);

		}

		public static function addPartial($name,$content){
			self::$partials[$name] = $content; 
		}

		public static function getPartial($name){
			
			return self::$partials[$name];

		}

		public static function addSlot($name,$content){
			self::$slots[self::currentPartial()][$name] = $content; 
		}

		public static function getSlot($name){
			
			if(self::currentPartial()){
				if(isset(self::$slots[self::currentPartial()][$name])){
					return self::$slots[self::currentPartial()][$name];
				}
				else{
					return "Neexistující partial";
				}
			}
			else{
				return "Slot bez partialu";
			}
			

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



	function componentMatrixRender($matrix_field_name = "xcf_content_matrix"){
		$matrix_array = wire()->page->$matrix_field_name;
		$matrix_tree = ProcessWireRepeaterItemsToTree($matrix_array);
		bd($matrix_array);
		bd($matrix_tree);
	}

	function repeaterItemsToTree($arr, $currentLevel = 0) {
		$root = array();
	  
		foreach ($arr as $elem){
		  if ($elem->depth == $currentLevel) {
			$root[] = $elem;
			//unset($elem);
		  } else if ($elem->depth == $currentLevel + 1) {
			$root[count($root)-1]->subitems = repeaterItemsToTree($arr,$elem->depth);      
		  }
		}
	  
		return $root;
	  }