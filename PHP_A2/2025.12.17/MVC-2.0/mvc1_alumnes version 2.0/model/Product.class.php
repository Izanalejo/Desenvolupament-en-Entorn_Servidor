<?php
class Product {
    
    private $id;
    private $name;
    //Afegim marca, descripció, preu i tipusProducte per poder mostrar-lo a la llista
    private $brand;
    private $description;
    private $price;
    private $productType;
    private $productList=array(); // si el necessitessim en una posterior ampliació!

    public function __construct($id,$brand, $name,  $description, $price, $productType ) {
        $this->id=$id;
        $this->brand=$brand;
        $this->name=$name;
        $this->description=$description;
        $this->price=$price;
        $this->productType=$productType;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id=$id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name=$name;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getBrand()
    {
        return $this->brand;
    }
    function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getProductType()
    {
        return $this->productType;
    }

    public function setProductType($productType)
    {
        $this->productType = $productType;
    }
    public function getProductList() {
        return $this->productList; 
    }

    public function setProductList($productList) {
        $this->productList[]=$productList;
    }

    public function writingNewLine() {
        return "\n$this->id;$this->brand;$this->name;$this->description;$this->price;$this->productType"; // podríem volem algun mètode extrar de la classe que ens fos interessant i general
    }
}
