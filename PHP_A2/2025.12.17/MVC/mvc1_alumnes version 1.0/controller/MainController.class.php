<?php
//cridem a tots els controladors que necessitem cridar des del processRequest()
require_once "controller/CategoryController.class.php";
//require_once "controller/ProductController.class.php";


class MainController {

    /**
     * Mètode d'entrada a l'aplicació. Segons l'opció del menú principal ens anem a un lloc o a un altre
     * 
     * 
     */
    public function processRequest() {

        //recuperaremos la opción que viene del menú principal

        //$request = isset($_GET["menu"])?$_GET["menu"]:NULL;
        $request=NULL;

        if(isset($_GET["menu"])){
            $request=$_GET["menu"];
        }

        switch ($request){
            case "category":
                $controlCategory = new CategoryController();
                $controlCategory->processRequest();
                break;
            //case "products":
                // -- to do --
            default:
                include("view/menu/MainMenu.html");
                
        }

    }
    
}
