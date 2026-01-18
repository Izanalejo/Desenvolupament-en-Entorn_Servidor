<?php
require_once "model/Product.class.php";
require_once "model/persist/DBConnect.class.php";
require_once "model/persist/ModelInterface.php";
require_once "util/ProductMessage.class.php";



//class to handle a category
class ProductDAO implements ModelInterface {

    //propietat que tenen tots els DAO per connectar-se a l'arxiu i poder fer les accions bàsiques generals
    private $dbConnect;

    public function __construct() {
        $this->dbConnect= new DBConnect("model/resources/products.txt");
    }

     /**
    * Recull tots els productes
    * @param void
    * @return vector amb tots els objectes de categories
    */
    public function listAll(){
        
        $response=array();
        $linesToFile=array();
        $linesToFile=$this->dbConnect->realAllLines();
        if(count($linesToFile)>0){
            foreach($linesToFile as $line){
                if(!empty($line)){
                    $pieces=explode(";", $line);
                    $product=new Product($pieces[0],$pieces[1],$pieces[2],$pieces[3],$pieces[4],$pieces[5]);
                    $response[]=$product;
                }
            }
        }
	
	return $response;
    }

    /**
    * Afegeix un producte
    * @param Product objecte
    * @return TRUE O FALSE
    */
    public function add($product){
		$result = $this->dbConnect->addNewLine($product->writingNewLine());

        if($result == false){
            $_SESSION['error'] = ProductMessage::ERR_DAO['insert'];
        }
        return $result;
	}


    /**
    * Modificar un producte
    * @param Product objecte donat
    * @return void
    */
   public function modify($productUpdate){
    $response = array();
    
    // Crear la nueva línea correctamente
    $newline = implode(';', [
        $productUpdate->getId(),
        $productUpdate->getBrand(),
        $productUpdate->getName(),
        $productUpdate->getDescription(),
        $productUpdate->getPrice(),
        $productUpdate->getProductType()
    ]);
    
    $linesToFile = array();
    $linesToFile = $this->dbConnect->realAllLines();
    
    if(count($linesToFile) > 0){
        foreach($linesToFile as $line){
            if(!empty($line)){
                $pieces = explode(";", $line);
                if($pieces[0] != $productUpdate->getId()){
                    $response[] = $line;
                } else {
                    $response[] = $newline;
                }
            }
        }
        $this->dbConnect->writeToFile($response);
    }
}


    /**
    * Esborra un producte donat l' id
    * @param $id identificador del producte a buscar
    * @return void
    */
    public function delete($id) {
        $response=array();
        $linesToFile=array();
        $linesToFile=$this->dbConnect->realAllLines();
        if(count($linesToFile)>0){
            foreach($linesToFile as $line){
                if(!empty($line)){
                    $pieces=explode(";", $line);
                    if($pieces[0] != $id){
                        $response[]=$line;
                    }
                }
            }
            $this->dbConnect->writeToFile($response);
        }
    }
    /**
    * Selecionar un producte per id
    * @param $id identificador de la categoria a buscar
    * @return Product objecte or NULL
    */
    public function searchById($id) {
        $listAll=$this->listAll(); 
        foreach($listAll as $product){
            if($product->getId()==$id){
                return $product;
            }
        }
        return null;
    }
}
    ?>
