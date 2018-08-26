<?php
/**
 * Created by PhpStorm.
 * User: PC-1076
 * Date: 8/10/2018
 * Time: 1:41 PM
 */

require_once "Service/ArticleService.php";
require_once "Service/CommentsService.php";
require_once "Service/CategoryService.php";
require_once "Repository/BaseRepository.php";
require_once "Service/BaseService.php";
require_once "utils/utils.php";
require_once "utils/db.php";
require_once "utils/Validators/Validator.php";
require_once "components/Repository/BaseRepository.php";
require_once "Controller/CategoryController.php";
require_once "Controller/ArticleController.php";
require_once "Controller/HomeController.php";
require_once "Controller/LoginController.php";
include_once "Repository/CommentsRepository.php";

class Application
{
    private $request;
    private $components;

    /**
     * Application constructor.
     * @param $request
     * @param $components
     */
    public function __construct()
    {
        session_start();
        $db = new Database(SERVER_NAME, USERNAME, PASSWORD, DB_NAME);
        $_SESSION["db"] = $db;
        $this->components = array();
    }

    public function run()
    {
//        if (!isset($_SESSION['email'])) {
//            if (!($this->checkRegisterPage()) && !($this->checkLoginPage())) {
//                $this->callFunction($this->getComponent("LoginController"), "displayLogin");
//            } else {
//                $this->checkAction();
//            }
//        } else {
        $this->checkAction();
//        }
    }

    private function checkAction()
    {
        if (isset($_REQUEST['action'])) {
            $this->request = $_REQUEST['action'];
            if ($this->hasPermission()) {
                $var = explode("_", $this->request);
                $class = $this->getComponent($var[0]);
                $this->callFunction($class, $var[1]);
            } else {
                header("Location: homepage");
            }
        } else {
            header("Location: index.php?action=HomeController_displayHomepage");
        }
    }

    public
    function getComponent($class)
    {
        if (!isset($this->components[$class])) {
            if (class_exists($class)) {
                $this->components[$class] = new $class();
            } else {
                echo "<br>";
                echo $class . " not found";
                echo "<br>";
                die;
            }
        }
        return $this->components[$class];

    }


    private
    function callFunction($class, $func)
    {

        $functions = get_class_methods($class);
        if (in_array($func, $functions)) {
            if (isset($_REQUEST['id'])) {
                $class->$func($_REQUEST);
            } else {
                $class->$func();
            }

        } else {
            echo "Function " . $func . " undefined";
            die;
        }
    }

    private
    function checkLoginPage()
    {

        return $_REQUEST['action'] == "LoginController_displayLogin" || $_REQUEST['action'] == "LoginController_login" || $_REQUEST['action'] == "LoginController_displayLoginError";
    }

    private
    function checkRegisterPage()
    {

        return $_REQUEST['action'] == "LoginController_displayRegister" || $_REQUEST['action'] == "LoginController_register" || $_REQUEST['action'] == "LoginController_errorRegister";
    }


    private function hasPermission()
    {


        if (isset($_SESSION['admin'])) {
            switch ($this->request) {
                case "ArticleController_manageArticles":
                    return true;
                case "ArticleController_addComment":
                    return true;
                case "ArticleController_getComments":
                    return true;
                case "ArticleController_editArticle":
                    return true;
                case "ArticleController_editArticleError":
                    return true;
                case "ArticleController_addArticle":
                    return true;
                case "ArticleController_addArticleError":
                    return true;
                case "ArticleController_updateArticle":
                    return true;
                case "ArticleController_displayArticle":
                    return true;
                case "CategoryController_manageCategories":
                    return true;
                case "CategoryController_displayCategories":
                    return true;
                case "CategoryController_editCategory":
                    return true;
                case "CategoryController_addCategory":
                    return true;
                case "LoginController_displayLogin":
                    return true;
                case "LoginController_login":
                    return true;
                case "LoginController_loginAdmin":
                    return true;
                case "LoginController_logoutAdmin":
                    return true;
                case "LoginController_displayAdminLogin":
                    return true;
                case "LoginController_displayLoginError":
                    return true;
                case "LoginController_displayAdminLoginError":
                    return true;
                case "LoginController_displayRegister":
                    return true;
                case "LoginController_errorRegister":
                    return true;
                case "LoginController_logout":
                    return true;
                case "HomeController_displayHomepage":
                    return true;
                case "HomeController_displayAdminHomepage":
                    return true;
                default:
                    return false;
            }
            return false;
        }
        if (isset($_SESSION["user"])) {
            switch ($this->request) {
                case "ArticleController_displayArticle":
                    return true;
                case "ArticleController_addComment":
                    return true;
                case "ArticleController_getComments":
                    return true;
                case "CategoryController_displayCategories":
                    return true;
                case "LoginController_displayLogin":
                    return true;
                case "LoginController_login":
                    return true;

                case "LoginController_logout":
                    return true;
                case "LoginController_loginAdmin":
                    return true;
                case "LoginController_displayAdminLogin":
                    return true;
                case "LoginController_displayLoginError":
                    return true;
                case "LoginController_displayAdminLoginError":
                    return true;
                case "LoginController_displayRegister":
                    return true;
                case "LoginController_errorRegister":
                    return true;
                case "LoginController_logout":
                    return true;
                case "HomeController_displayHomepage":
                    return true;
                default:
                    return false;
            }

        }
        if (!isset($_SESSION["user"]) && !isset($_SESSION['admin'])) {
            switch ($this->request) {
                case "ArticleController_displayArticle":
                    return true;
                case "ArticleController_addComment":
                    return true;
                case "ArticleController_getComments":
                    return true;
                case "CategoryController_displayCategories":
                    return true;
                case "LoginController_displayLogin":
                    return true;
                case "LoginController_login":
                    return true;
                case "LoginController_loginAdmin":
                    return true;
                case "LoginController_displayAdminLogin":
                    return true;
                case "LoginController_displayLoginError":
                    return true;
                case "LoginController_displayAdminLoginError":
                    return true;
                case "LoginController_displayRegister":
                    return true;
                case "LoginController_errorRegister":
                    return true;
                case "LoginController_logout":
                    return true;
                case "HomeController_displayHomepage":
                    return true;
                default:
                    return false;
            }
        }
    }
}