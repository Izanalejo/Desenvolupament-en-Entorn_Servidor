<?php

class ProductFormValidation {

    const ADD_FIELDS = array('id','brand','name','description','price','productType');
    const MODIFY_FIELDS = array('id','name');
    const DELETE_FIELDS = array('id');
    const SEARCH_FIELDS = array('id');
    
    const NUMERIC = "/[^0-9]/";
    const ALPHABETIC = "/[^a-z A-Z]/";
    
    public static function checkData($fields) {
        $id=NULL;
        $brand=NULL;
        $name=NULL;
        $description=NULL;
        $price=NULL;
        $productType=NULL;
        
        
        foreach ($fields as $field) {
            switch ($field) {
                case 'id':
                    // filter_var retorna los datos filtrados o FALSE si el filtro falla
                    $id=trim(filter_input(INPUT_POST, 'id'));
                    $idValid=!preg_match(self::NUMERIC, $id);
                    if (empty($id)) {
                        array_push($_SESSION['error'], ProductMessage::ERR_FORM['empty_id']);
                    }
                    else if ($idValid == FALSE) {
                        array_push($_SESSION['error'], ProductMessage::ERR_FORM['invalid_id']);
                    }
                    break;
                case 'name':
                    $name=trim(filter_input(INPUT_POST, 'name'));
                    $nameValid=!preg_match(self::ALPHABETIC, $name);
                    if (empty($name)) {
                        array_push($_SESSION['error'], ProductMessage::ERR_FORM['empty_name']);
                    }
                    else if ($nameValid == FALSE) {
                        array_push($_SESSION['error'], ProductMessage::ERR_FORM['invalid_name']);
                    }
                    break;
                case 'brand':
                    $brand = trim(filter_input(INPUT_POST, 'brand'));
                    if (empty($brand)) {
                        array_push($_SESSION['error'], ProductMessage::ERR_FORM['empty_brand']);
                    }
                    break;

                case 'description':
                    $description = trim(filter_input(INPUT_POST, 'description'));
                    if (empty($description)) {
                        array_push($_SESSION['error'], ProductMessage::ERR_FORM['empty_description']);
                    }
                    break;

                case 'price':
                    $price = trim(filter_input(INPUT_POST, 'price'));
                    if (empty($price) || !is_numeric($price)) {
                        array_push($_SESSION['error'], ProductMessage::ERR_FORM['invalid_price']);
                    }
                    break;

                case 'productType':
                    $productType = trim(filter_input(INPUT_POST, 'productType'));
                    if (empty($productType)) {
                        array_push($_SESSION['error'], ProductMessage::ERR_FORM['empty_productType']);
                    }
                    break;
            }
        }
        
        $product=new Product($id, $brand, $name, $description, $price, $productType);
        
        return $product;
    }
    
}
