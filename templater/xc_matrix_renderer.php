<?php namespace ProcessWire;

    include "xc_component.php";

    $indexFrom = 0;

	function repeaterItemsToTree($arr, $currentLevel = 0) {
        global $indexFrom;
		$root = array();
	  
        $i=0;
		foreach ($arr as $elem){
         
          if($i>=$indexFrom){
            echo "Procházím el. n. $i";
            if ($elem->depth == $currentLevel) {
                $root[] = $elem;
                $indexFrom++;
                
              } else if ($elem->depth == $currentLevel + 1) {
                $root[count($root)-1]->subitems = repeaterItemsToTree($arr,$elem->depth);      
              }
              else{
                  return $root;
              }
          }
		  
          $i++;
		}
	  
		return $root;
	  }

    function componentMatrixRender($matrix_field_name = "xcf_content_matrix"){
		$matrix_array = wire()->page->$matrix_field_name;
		$matrix_tree = repeaterItemsToTree($matrix_array);
		bd($matrix_array);
		bd($matrix_tree);
        

        processMatrixTreeRender($matrix_tree);

	}

    function processMatrixTreeSimpleRender($array, $depth = 0){

        foreach($array as $item){
            for($i=0;$i<$depth;$i++){
                echo " -";
            }
            echo " - ".$item->xcf_title." -  <br>";
            //bd($item->name);
            //dump($item->children->count());
            bd($item->getMatrixInfo()["type"]);
            
            if($item->subitems){
                processMatrixTreeSimpleRender($item->subitems,$depth + 1);
            }
        }    
    }

    function processMatrixTreeRender($array, $depth = 0){

        foreach($array as $item){
            for($i=0;$i<$depth;$i++){
                echo " -";
            }
            xcComponent($item->getMatrixInfo()["type"],$item);
            
            if($item->subitems){
                processMatrixTreeRender($item->subitems,$depth + 1);
            }
        }    
    }