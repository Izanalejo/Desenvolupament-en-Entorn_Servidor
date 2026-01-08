<?php


class ProductView {
  
  /**
 * Este metodo enseña los archivos de la vista
 * @param $template, fichero que contiene una tabla o un formulario
 * @param $content objecto/array de objetos con los valores que queremos que aparezcan en el fichero $template
 * @return none
 */

public function display($template=NULL, $content=NULL){

    //ZONA 1, Zona del MENU
    include ("view/menu/ProductMenu.html");

    //ZONA2,  RESERVADA PARA LAS TABLAS O PARA LOS FORUMLARIOS
    if (!empty($template)){ //O ES NULL
      include($template);//incluimos lo que queremos visualizar: tabla o formulario
    
    //ZONA 3, Zona de mensajeria
    //Imprimir los mensajes memorizados en las variables de sesión
    //$_SESSION['error' y $]

    include("view/form/MessageForm.php");
    }
    
    
  
}


}
