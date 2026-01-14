<?php
//crido de manera general tot el que necessitaré cridar

//to do

require_once "controller/ControllerInterface.php";
require_once "view/ProductView.class.php";
require_once "model/persist/ProductDAO.class.php";
require_once "model/Product.class.php";
require_once "util/ProductMessage.class.php";
require_once "util/ProductFormValidation.class.php";

class ProductController implements ControllerInterface {

    //atributs que segur que tindran tots els controladors
    private $view;
    private $model;

    //constructor del controlador. Instancia objectes de les classes de la vista i el model necessàries per poder 
    //comunicar aquest controlador amb la resta
    /**
     * Constructor del controlador. Instancia objectes de les classes de la vista i el model 
     * que són necessaris per poder comunicar aquest controlador amb la resta de l'aplicació
     * @param none
     * @return none
    **/
    public function __construct() {

        // càrrega de la vista
        $this->view=new ProductView();

        // càrrega del model de dades
        $this->model=new ProductDAO();
    }

    /**
     * Aquest mètode el tenen tots els nostres controladors
     * Serveix per saber què fer per cada opció demanada per l'usuari: llistar, afegir, eliminar,...
     * @param none
     * @return none
    **/
    public function processRequest() {
        $_SESSION['info'] = [];
        $_SESSION['error'] = [];
        
        $request=NULL;

        if(isset($_POST["action"])){ //La petición viene por el FORMULARIO
            $request = ($_POST["action"]);
        }else if(isset($_GET["option"])){ //La petición viene por la URL, por GET
            $request=$_GET["option"];
        }

        switch ($request){
            case "list_all":
                $this->listAll();
                break;
            case "form_add":
                $this->formAdd();
                break;
            case "add":
                $this->add();
                break;
            case "searchById":
                $this->searchById();
                break;
            case "buscar":
                $this->search();
                break;
            case "form_delete": //1. Mostrar formulario de DELETE
                $this->formDelete();
                break;
            case "delete": //2. Accion de borrar en el fichero
                $this->delete();
                break;
            default:
                $this->view->display();
    }
}

    /**
     * Aquest mètode ens mostra tots els productes
     * @param none
     * @return none
    **/
    
    public function listAll() {
        $products=array();
       //llamamos al modelo, es obligatorio
       $products=$this->model->listAll(); //$products es un array de objetos producte

       if (!empty($products)){
            $this->view->display("view/form/ProductList.php", content: $products);
       }else{
            $this->view->display("view/form/ProductList.php");
       }
    }
    /**
     * Aquest mètode ens mostra el formulari necessari per afegir un nou 
     * producte
     * @param none
     * @return none
    **/
    public function formAdd() {
        $this->view->display("view/form/ProductFormAdd.php");
    }

    /**
     * Aquest mètode ens afegeix el producte al fitxer
     * @param none
     * @return none
    **/
    public function add() {
        $productValid = ProductFormValidation::checkData(ProductFormValidation::ADD_FIELDS);

        if(empty($_SESSION['error'])){
            $result = $this->model->add($productValid);
            if($result == true){
                $_SESSION['info'] = ProductMessage::INF_FORM['insert'];
            }else{
                $_SESSION['error'] = ProductMessage::ERR_DAO['insert'];
            }
        }
        $this->view->display("view/form/ProductFormAdd.php", $productValid);
    }

    //altres mètodes necessaris: to do
    public function modify(){
        //to do
    }
    public function formDelete(){
        $this->view->display("view/form/ProductFormDelete.php");
    }
    public function delete(){
    if($this->model->searchById($_POST['id'])){
        $this->model->delete($_POST['id']);
        header('location: ' .$_SERVER['PHP_SELF'] . "?menu=products&option=list_all");
    }
    }
    public function searchById(){
        $this->view->display("view/form/ProductSearchById.php", );
    } 

    public function search(){
        $id = $_POST['id'];
        $search = $this->model->searchById($id);

        if($search == true){
                $_SESSION['info'] = ProductMessage::INF_FORM['found'];
            }else{
                $_SESSION['error'] = ProductMessage::ERR_FORM['not_exists_id'];
            }
        $this->view->display("view/form/ProductSearch.php", $search);

        return $search;
    }
}



