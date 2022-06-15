<?php namespace ProcessWire;

include "xc_template.php";


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

function xcComponent($name,$repeater_item = false){

    //bd(wire()->webengine->getComponentFile($name));

    $tmpl = new XcTemplate(wire()->webengine->getComponentFile($name),$repeater_item);
    echo $tmpl->render();

    //echo "<div style='background: #f2f2f2; margin: 1rem;'>*".$name." - ".$repeater_item->xcf_title." - ".$repeater_item->xcf_richtext."*</div>";
}

