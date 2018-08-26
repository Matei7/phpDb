<?php
/**
 * Created by PhpStorm.
 * User: Matei
 * Date: 8/11/2018
 * Time: 18:35
 */

include_once "components/Repository/ArticleRepository.php";
include_once "BaseService.php";


class ArticleService extends BaseService
{
    public function __construct()
    {
        return parent::__construct(new ArticleRepository($_SESSION["db"]));
    }

    public function getArticlesByCondition($id)
    {
        $sqlQuery = " SELECT articole.* FROM articole INNER JOIN articol2categorii ON articole.id = articol2categorii.idArticol where articol2categorii.idCategorie = " . $id;
        $result = $this->repo->customSelect($sqlQuery);
        return $result;

    }

    public function getArticlesNumberOfRows($id)
    {
        $sqlQuery = " SELECT COUNT(*) FROM articole INNER JOIN articol2categorii ON articole.id = articol2categorii.idArticol where articol2categorii.idCategorie = " . $id;

        return $this->repo->getCustomOne($sqlQuery);

    }

    public function getArticlesPerPage($id, $offset, $rowsperpage)
    {
        $sqlQuery = " SELECT articole.* FROM articole INNER JOIN articol2categorii ON articole.id = articol2categorii.idArticol where articol2categorii.idCategorie = " . $id . " LIMIT $offset, $rowsperpage";

        return $this->repo->customSelect($sqlQuery);
    }


    public function getAllArticlesPerPage($offset, $rowsperpage)
    {
        $sqlQuery = " SELECT * FROM articole WHERE 1 LIMIT $offset, $rowsperpage";

        return $this->repo->customSelect($sqlQuery);
    }


    public function updateArticle($title, $content, $id)
    {
        $title = "'" . $title . "'";
        $content = "'" . $content . "'";
        $sqlQuery = "UPDATE `articole` SET titlu=" . $title . ", continut=" . $content . " WHERE id=" . $id;
        $this->repo->update($sqlQuery);


    }


}