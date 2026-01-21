<?php
//crido tot el que necessitaré fer servir

require_once "controller/ControllerInterface.php";
require_once "view/CategoryView.class.php";
require_once "model/persist/CategoryDAO.class.php";
require_once "model/Category.class.php";
require_once "util/CategoryMessage.class.php";
require_once "util/CategoryFormValidation.class.php";

class CategoryController implements ControllerInterface
{

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
    public function __construct()
    {

        // càrrega de la vista
        $this->view = new CategoryView();

        // càrrega del model de dades
        $this->model = new CategoryDAO();
    }


    /**
     * Aquest mètode el tenen tots els nostres controladors
     * Serveix per saber què fer per cada opció demanada per l'usuari: llistar, afegir, eliminar,...
     * @param none
     * @return none
     **/
    public function processRequest()
    {

        $_SESSION['info'] = [];
        $_SESSION['error'] = [];

        $request = NULL;

        if (isset($_POST["action"])) { //La petición viene por el FORMULARIO
            $request = ($_POST["action"]);
        } else if (isset($_GET["option"])) { //La petición viene por la URL, por GET
            $request = $_GET["option"];
        }

        switch ($request) {
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
            case "form_delete":
                $this->formDelete();
                break;
            case "delete":
                $this->delete();
                break;
            case "form_update":
                $this->formModify();
                break;
            case "updateById":
                $this->updateById();
                break;
            case "update":
                $this->modify();
                break;
            default:
                $this->view->display();
        }
    }

    /**
     * Aquest mètode ens mostra totes les categories
     * @param none
     * @return none
     **/

    public function listAll()
    {
        $categories = array();
        //llamamos al modelo, es obligatorio
        $categories = $this->model->listAll(); //$categories es un array de objetos categoria

        if (!empty($categories)) {
            $this->view->display("view/form/CategoryList.php", content: $categories);
        } else {
            $this->view->display("view/form/CategoryList.php");
        }
    }
    /**
     * Aquest mètode ens mostra totes les categories
     * @param none
     * @return none
     **/
    public function formAdd()
    {
        $this->view->display("view/form/CategoryFormAdd.php");
    }

    /**
     * Aquest mètode ens afegeix la categoria al fitxer
     * @param none
     * @return none
     **/
    public function add()
    {
        $categoryValid = CategoryFormValidation::checkData(CategoryFormValidation::ADD_FIELDS);

        if (empty($_SESSION['error'])) {
            $result = $this->model->add($categoryValid);
            if ($result == true) {
                $_SESSION['info'][] = CategoryMessage::INF_FORM['insert'];
            } else {
                $_SESSION['error'][] = CategoryMessage::ERR_DAO['insert'];
            }
        }
        $this->view->display("view/form/CategoryFormAdd.php", $categoryValid);
    }

    public function formModify(){
        $this->view->display("view/form/CategoryFormModify.php");
    }
    
    public function updateById(){
        $id = $_POST['id'];
        $category = $this->model->searchById($id);
        

        if($category !== NULL)
        {
            $this->view->display("view/form/CategoryModify.php", $category);
        }
        else{
            $_SESSION['error'] = CategoryMessage::ERR_FORM['invalid_id'];
            $this->view->display("view/form/CategoryFormModify.php");     
        }
    }
    public function modify()
    {
        $this->model->modify(new Category($_POST["id"], $_POST["name"]));
        header("location: ".$_SERVER["PHP_SELF"]."?menu=category&option=list_all");
    }
    public function formDelete(){
        $this->view->display("view/form/CategoryFormDelete.php");
    }
    public function delete()
    {
        if ($this->model->searchById($_POST['id'])){
            $this->model->delete($_POST['id']);
        }
        header('location: ' . $_SERVER['PHP_SELF'] . "?menu=category&option=list_all"); 
    }
    public function searchById()
    {
        $this->view->display("view/form/CategorySearchById.php");
    }
    public function search()
    {
        $id = $_POST['id'];

        $category = $this->model->searchById($id);

        $this->view->display("view/form/CategorySearch.php", $category);
    }
}
