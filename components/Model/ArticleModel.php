<?php
/**
 * Created by PhpStorm.
 * User: PC-1076
 * Date: 8/23/2018
 * Time: 2:36 PM
 */
include_once "components/Model/BaseModel.php";

class ArticleModel extends BaseModel
{


    /**
     * ArticleModel constructor.
     */
    public function __construct()
    {
        return parent::__construct('articole');
    }
}