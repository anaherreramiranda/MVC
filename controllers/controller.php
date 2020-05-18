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

        $enlacesController = $_GET["action"];

        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

        include $respuesta;

    }
}


?>