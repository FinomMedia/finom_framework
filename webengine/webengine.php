<?php
    //include "utils.php";
    //include "templateEnginev2";
    namespace Media;


    class WebengineAlone {


        public $pw;


        public function __construct($pw = null) {
            
            if($pw){
                $this->pw = $pw;
            }

            //bd("test");
        }

        public function resolveSite(){

        }

        public function resolveSitePw(){
            $site_name = $_SERVER['SERVER_NAME'];
            $page = $this->pw->pages->findOne("title=$site_name");

            return $page;

            //$this->pw->pages()->get("title=")
        }


    }

?>