<?php
/**
 * Created by PhpStorm.
 * User: Matei
 * Date: 8/11/2018
 * Time: 18:44
 */

class HomeController extends BaseController
{

    public $articleService;
    public $categoryService;

    public function __construct()
    {
        $this->articleService = new ArticleService();
        $this->categoryService = new CategoryService();
        return parent::__construct();
    }

    public function displayHomepage()
    {
        $this->view->assign("categorii", $this->categoryService->selectAll());
        $this->view->show("homepage.php");
    }

    public function displayAdminHomepage()
    {
        $this->view->assign("categorii", $this->categoryService->selectAll());
        $this->view->show("homepageAdmin.php");
    }


}