<?php
/**
 * Created by PhpStorm.
 * User: Matei
 * Date: 8/11/2018
 * Time: 18:38
 */


include_once "components/Repository/CategoryRepository.php";

class CategoryService extends BaseService
{
    public function __construct()
    {
        return parent::__construct(new CategoryRepository($_SESSION["db"]));
    }


    public function getCategoriesPerPage($offset, $rowsperpage)
    {
        $sqlQuery = " SELECT * FROM categorii WHERE 1 LIMIT $offset, $rowsperpage";

        return $this->repo->customSelect($sqlQuery);
    }


    public function updateCategory($title, $content, $id)
    {
        $title = "'" . $title . "'";
        $content = "'" . $content . "'";
        $sqlQuery = "UPDATE `categorii` SET nume=" . $title . ", descriere=" . $content . " WHERE id=" . $id;
        $this->repo->update($sqlQuery);
    }
}