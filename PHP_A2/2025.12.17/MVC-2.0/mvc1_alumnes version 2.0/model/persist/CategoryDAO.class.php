<?php
require_once "model/Category.class.php";
require_once "model/persist/DBConnect.class.php";
require_once "model/persist/ModelInterface.php";
require_once "util/CategoryMessage.class.php";


//class to handle a category
class CategoryDAO implements ModelInterface
{

    //propietat que tenen tots els DAO per connectar-se a l'arxiu i poder fer les accions bàsiques generals
    private $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect("model/resources/categories.txt");
    }

    /**
     * Recull totes les categories
     * @param void
     * @return vector amb tots els objectes de categories
     */
    public function listAll()
    {

        $response = array();
        $linesToFile = array();
        $linesToFile = $this->dbConnect->realAllLines();
        if (count($linesToFile) > 0) {
            foreach ($linesToFile as $line) {
                if (!empty($line)) {
                    $pieces = explode(";", $line);
                    $category = new Category($pieces[0], $pieces[1]);
                    $response[] = $category;
                }
            }
        }

        return $response;
    }

    /**
     * Afegeix una categoria
     * @param Category objecte
     * @return TRUE O FALSE
     */
    public function add($category)
    {
        $result = $this->dbConnect->addNewLine($category->writingNewLine());

        return $result;
    }


    /**
     * Modificar una categoria
     * @param Category objecte donat
     * @return TRUE o FALSE
     */
    public function modify($categoryUpdate)
    {
        $response = array();

        // Crear la nueva línea correctamente
        $newline = implode(';', [
            $categoryUpdate->getId(),
            $categoryUpdate->getName(),
        ]);

        $linesToFile = array();
        $linesToFile = $this->dbConnect->realAllLines();

        if (count($linesToFile) > 0) {
            foreach ($linesToFile as $line) {
                if (!empty($line)) {
                    $pieces = explode(";", $line);
                    if ($pieces[0] != $categoryUpdate->getId()) {
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
     * Esborra una categoria donat l' id
     * @param $id identificador de la categoria a buscar
     * @return void
     */
    public function delete($id)
    {
        $response = array();
        $linesToFile = array();
        $linesToFile = $this->dbConnect->realAllLines();
        if (count($linesToFile) > 0) {
            foreach ($linesToFile as $line) {
                if (!empty($line)) {
                    $pieces = explode(";", $line);
                    if ($pieces[0] != $id) {
                        $response[] = $line;
                    }
                }
            }
            $this->dbConnect->writeToFile($response);
        }
    }
    /**
     * Selecionar una categoria per id
     * @param $id identificador de la categoria a buscar
     * @return Category objecte or NULL
     */
    public function searchById($id)
    {
        $listAll = $this->listAll();
        foreach ($listAll as $category) {
            if ($category->getId() == $id) {
                return $category;
            }
        }
        return null;
    }
}
