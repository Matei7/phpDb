<?php
/**
 * Created by PhpStorm.
 * User: PC-1076
 * Date: 8/20/2018
 * Time: 11:38 AM
 */


class CommentsService extends BaseService
{
    public function __construct()
    {
        return parent::__construct(new CommentsRepository($_SESSION["db"]));
    }

    public function addComment($idArticol, $comment)
    {
        $email = "'" . $_SESSION['email'] . "'";
        $comment = "'" . $comment . "'";
        $sqlQuery = "INSERT INTO `art2comm` (`id`, `idArticol`, `useremail`, `comment`) VALUES (NULL, $idArticol, $email, $comment);";
        $this->repo->insert($sqlQuery);
    }

    public function getComments($id)
    {
        $id = "'" . $id . "'";
        $sqlQuery = "SELECT * from `art2comm` where idArticol = $id";
        return $this->repo->customSelect($sqlQuery);

    }
}