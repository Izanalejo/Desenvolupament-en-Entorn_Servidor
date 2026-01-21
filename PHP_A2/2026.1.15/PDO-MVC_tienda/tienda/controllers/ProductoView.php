<?php

class ProductoView {
    public function __construct() {}
    public function display($template=NULL, $content=NULL){
        if($template != NULL){
            include($template);
        }
    }
}
