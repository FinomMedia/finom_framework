<?php namespace ProcessWire; 


class XcTemplate {

		protected $path, $data;

		public function __construct($path, $data){
			$this->path = $path;
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



?>