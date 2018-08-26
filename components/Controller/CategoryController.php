<?php
/**
 * Created by PhpStorm.
 * User: Matei
 * Date: 8/11/2018
 * Time: 18:45
 */

include_once "BaseController.php";

class CategoryController extends BaseController
{

    private $categoryServ;

    /**
     * ArticleController constructor.
     * @param $articleService
     */
    public function __construct()
    {
        $this->categoryServ = new CategoryService();
        return parent::__construct();
    }

    function manageCategories()
    {


        $numrows = count($this->categoryServ->selectAll());
        $this->view->assign("numrows", $numrows);
        $rowsperpage = 15;
        $totalpages = ceil($numrows / $rowsperpage);
        $prevpage = '';
        $nextpage = '';

        if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
            $currentpage = (int)$_GET['currentpage'];
        } else {
            $currentpage = 1;
        }
        if ($currentpage > $totalpages) {
            $currentpage = $totalpages;
        }
        if ($currentpage < 1) {
            $currentpage = 1;
        }
        $offset = ($currentpage - 1) * $rowsperpage;
        $result = $this->categoryServ->getCategoriesPerPage($offset, $rowsperpage);
        $this->view->assign("categories", $result);
        $this->view->assign("currentpage", $currentpage);
        $this->view->assign("totalpages", $totalpages);
        $this->view->show("manageCategories.php");
    }

    public function displayCategories($data)
    {
        $this->view->assign("id", $data["id"]);
        $this->view->assign("categorii", $this->categoryServ->selectAll());
        $this->view->show("categorii.php");
    }


    function getCategories()
    {
        echo json_encode($this->categoryServ->selectAll());
    }


    function deleteCategory()
    {
        $id = $_POST["category_id"];
        $this->categoryServ->delete("id='" . $id . "'");
        header("Location: index.php?action=CategoryController_manageCategories");
    }
}