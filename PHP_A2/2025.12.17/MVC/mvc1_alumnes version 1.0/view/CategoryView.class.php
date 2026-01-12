<?php


class CategoryView {
  
  /**
 * Este metodo enseña los archivos de la vista
 * @param $template, fichero que contiene una tabla o un formulario
 * @param $content objecto/array de objetos con los valores que queremos que aparezcan en el fichero $template
 * @return none
 */

public function display($template=NULL, $content=NULL){

    //ZONA del MENU
    include ("view/menu/CategoryMenu.html");

    //ZONA RESERVADA PARA LAS TABLAS O PARA LOS FORUMLARIOS
    if (!empty($template)){ //O ES NULL
      include($template);//incluimos lo que queremos visualizar: tabla o formulario
    }
}

}
