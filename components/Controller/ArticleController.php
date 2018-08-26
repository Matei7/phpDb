<?php
include_once "components/Model/ArticleModel.php";

class ArticleController extends BaseController
{
    private $articleService;
    private $commService;
    private $userService;
    private $catService;
    private $validator;

    /**
     * ArticleController constructor.
     * @param $articleService
     */
    public function __construct()
    {
        $this->articleService = new ArticleService();
        $this->commService = new CommentsService();
        $this->userService = new UserService();
        $this->catService = new CategoryService();

        $this->validator = new Validator(["Title" => "min-5, required",
                "Content" => "required",
                "Categories" => "size-0"]
        );

        return parent::__construct();
    }


    function displayArticle($data)
    {
        $id = $data['id'];
        $article = $this->articleService->selectOne("id=" . $id);

        $sql = " SELECT user.* FROM user
                    INNER JOIN articol2autori ON user.id = articol2autori.idAutor where  articol2autori.idArticol=" . $id;
        $result = $this->articleService->customSelect($sql);


        $this->view->assign("title", $article["titlu"]);
        $this->view->assign("autori", $result);
        $this->view->assign("content", $article["continut"]);
        $this->view->assign("img", $article["imagine"]);


        $sql = " SELECT categorii.* FROM categorii
                    INNER JOIN articol2categorii ON categorii.id = articol2categorii.idCategorie where  articol2categorii.idArticol=" . $id;
        $result = $this->articleService->customSelect($sql);
        $this->view->assign("categorii", $result);

        $this->view->show("article.php");
    }


    function manageArticles()
    {
        $articles = $this->articleService->selectAll();
        $numrows = count($articles);
        $this->view->assign("numrows", $numrows);
        $rowsperpage = 25;
        $totalpages = ceil($numrows / $rowsperpage);
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
        $this->view->assign("articles", $this->articleService->getAllArticlesPerPage($offset, $rowsperpage));
        $this->view->assign("currentpage", $currentpage);
        $this->view->assign("totalpages", $totalpages);

        $this->view->show("manageArticles.php");
    }


    function addComment()
    {
        if (isset($_SESSION['user']) || isset($_SESSION['admin'])) {
            $id = $_POST["article_id"];
            if (!empty($_POST["comment_content"])) {
                $comment_content = $_POST["comment_content"];
                $this->commService->addComment($id, $comment_content);
            }
            echo json_encode(1);
        }
        echo json_encode(0);


    }

    function getComments()
    {
        $id = $_POST["article_id"];
        echo json_encode($this->commService->getComments($id));
    }


    function editArticle($data)
    {
        $id = $data['id'];
        $article = $this->articleService->selectOne("id=" . $id);
        $this->view->assign("categories", $this->catService->selectAll());
        $this->view->assign("id", $id);
        $this->view->assign("title", $article['titlu'] ? $article['titlu'] : "Enter title");
        $this->view->assign("content", $article['continut'] ? $article['continut'] : "Enter text");


        $sql = " SELECT categorii.* FROM categorii
                    INNER JOIN articol2categorii ON categorii.id = articol2categorii.idCategorie where  articol2categorii.idArticol=" . $id;
        $result = $this->articleService->customSelect($sql);
        $this->view->assign("articlesCategories", $result);


        $this->view->show("editArticle.php");
    }

    function getAuthors()
    {
        echo json_encode($this->userService->selectAll());
    }


    function updateArticle()
    {

        $arr = ["Title" => $_POST['article_title'], "Content" => $_POST['article_content'], "Categories" => $_POST['categories']];
        $response = $this->validator->validate($arr);
        if ($response != 'valid') {
            if ($_REQUEST['action'] == 'ArticleController_editArticle') {
                header("Location: index.php?action=ArticleController_editArticleError&id" . $_POST['id'] . "=&error=" . $response);
            } else {
                header("Location: index.php?action=ArticleController_addArticleError&error=" . $response);
            }
        } else {
            $articleModel = new ArticleModel();
            $oldpath = $_FILES['fileToUpload']['tmp_name'];
            $extension = explode(".", $_FILES['fileToUpload']['name']);
            $newname = "";
            $articleId = '';
            if (isset($_POST['id'])) {
                $newname = "article-" . $_POST['id'] . "." . $extension[1];
                $articleId = $_POST['id'];
                $data = [
                    "id" => $_POST['id'],
                    "titlu" => $_POST['article_title'],
                    "continut" => $_POST['article_content'],
                    "imagine" => $newname,
                    "visible" => 1
                ];
                $articleModel->loadFromArray($data);
                $articleModel->update();
                header("Location: index.php?action=ArticleController_editArticle&id=" . $_POST['id']);
            } else {
                $data = [
                    "titlu" => $_POST['article-title'],
                    "continut" => $_POST['article-content'],
                    "imagine" => $newname,
                    "visible" => 1
                ];
                $articleModel->loadFromArray($data);
                $articleModel->save();
                $id = $articleModel->getIdFromLastElem();
                $newname = "article-" . $id . "." . $extension[1];
                $data["imagine"] = $newname;
                $data["id"] = $id;
                $articleId = $id;
                $articleModel->loadFromArray($data);
                $articleModel->save();
                header("Location: index.php?action=ArticleController_addArticle");
            }
            $newpath = "images/" . $newname;
            move_uploaded_file($oldpath, $newpath);

            $sqlQuery = "DELETE FROM `articol2categorii` WHERE `idArticol` =" . $articleId;
            $this->articleService->update($sqlQuery);
            foreach ($_POST['categories'] as $cat) {
                $query = ' INSERT INTO `articol2categorii` (`id`, `idArticol`, `idCategorie`) VALUES (NULL, ' . $articleId . ', ' . $cat . ');';
                $this->articleService->insert($query);
            }

            $sqlQuery = "DELETE FROM `articol2autori` WHERE `idArticol` =" . $articleId . " AND  `idAutor`=" . $_SESSION['id'];
            $this->articleService->update($sqlQuery);
            $query = 'INSERT INTO `articol2autori` (`id`, `idArticol`, `idAutor`) VALUES (NULL, ' . $articleId . ',' . $_SESSION['id'] . ');';
            $this->articleService->insert($query);
        }

    }

    function deleteArticle()
    {
        $id = $_POST["article_id"];
        $this->articleService->delete("id='" . $id . "'");
        unlink("images/article-" . $id . '.jpg');
        header("Location: index.php?action=ArticleController_manageArticles");
    }

    function addArticle()
    {
        $this->view->assign("categories", $this->catService->selectAll());
        $this->view->show("addArticle.php");
    }


    public function editArticleError($data)
    {
        $id = $data['id'];
        $article = $this->articleService->selectOne("id=" . $id);
        $this->view->assign("categories", $this->catService->selectAll());
        $this->view->assign("id", $id);
        $this->view->assign("title", $article['titlu'] ? $article['titlu'] : "Enter title");
        $this->view->assign("content", $article['continut'] ? $article['continut'] : "Enter text");


        $sql = " SELECT categorii.* FROM categorii
                    INNER JOIN articol2categorii ON categorii.id = articol2categorii.idCategorie where  articol2categorii.idArticol=" . $id;
        $result = $this->articleService->customSelect($sql);
        $this->view->assign("articlesCategories", $result);
        $this->view->assign("error", $_GET['error']);
        $this->view->show("editArticle.php");
    }

    public function addArticleError()
    {
        $this->view->assign("error", $_GET['error']);
        $this->view->show("addArticle.php");
    }

}