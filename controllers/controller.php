<?php

class MvcController{

    #LLAMADA A LA PLANTILLA
    #----------------------------------------
    
    public function plantilla(){
        
        include "views/template.php";
    }

    #LLAMADA A LA PLANTILLA
    #----------------------------------------
    public function enlacesPaginasController(){

        $enlaces = $_GET["action"];

        echo $enlaces;
        
    }
}


?>