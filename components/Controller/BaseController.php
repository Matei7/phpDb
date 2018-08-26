<?php
require_once "components/Views/View.php";

class BaseController
{
    public $view;

    function __construct()
    {
        $this->view = new View();
    }


}