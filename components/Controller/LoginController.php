<?php
/**
 * Created by PhpStorm.
 * User: PC-1076
 * Date: 8/13/2018
 * Time: 2:54 PM
 */

include_once "components/Service/UserService.php";


class LoginController extends BaseController
{
    private $userServ;
    private $validator;


    public function __construct()
    {
        $this->userServ = new UserService();
        $this->validator = new Validator(["email" => "email, required",
                "password" => "password",
                "name" => "required, min-4"]
        );

        return parent::__construct();
    }


    public function displayLogin()
    {
        $this->view->show("login.php");
    }

    public function displayAdminLogin()
    {
        if (isset($_SESSION['admin'])) {
            header("Location: admin-homepage");
        } else {
            $this->view->show("loginAdmin.php");
        }

    }

    public function login()
    {
        $email = $this->test_input($_POST['email']);
        $pass = $this->test_input($_POST['password']);
        $arr = ["email" => $email, "password" => $pass];
        $response = $this->validator->validate($arr);
        if ($response == 'valid') {
            $user = $this->userServ->checkUser($email, $pass, "user");
            if ($user != null) {
                $_SESSION['user'] = $user;
                $_SESSION['email'] = $email;
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['nume'];
                header("Location: index.php?action=HomeController_displayHomepage");
            } else {
                header("Location: index.php?action=LoginController_displayLoginError&error=" . "Bad credentials");
            }
        } else {
            header("Location: index.php?action=LoginController_displayLoginError&error=" . $response);
        }
    }


    public function loginAdmin()
    {
        $email = $this->test_input($_POST['email']);
        $pass = $this->test_input($_POST['password']);
        $arr = ["email" => $email, "password" => $pass];
        $response = $this->validator->validate($arr);
        if ($response == 'valid') {
            $user = $this->userServ->checkUser($email, $pass, "admin");
            if ($user != null) {
                $_SESSION['admin'] = $user;
                $_SESSION['email'] = $email;
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['nume'];

                header("Location: index.php?action=HomeController_displayAdminHomepage");
            } else {
                header("Location: index.php?action=LoginController_displayLoginError&error=" . "Bad credentials");
            }
        } else {
            header("Location: index.php?action=LoginController_displayLoginError&error=" . $response);
        }
    }


    public
    function displayLoginError()
    {
        $this->view->assign("error", $_GET['error']);
        $this->view->show("login.php");
    }

    public
    function displayAdminLoginError()
    {
        $this->view->assign("error", $_GET['error']);
        $this->view->show("loginAdmin.php");
    }

    public
    function displayRegister()
    {
        $this->view->show("register.php");
    }

    public
    function register()
    {
        $email = $this->test_input($_POST['email']);
        $pass = $this->test_input($_POST['password']);
        $name = $this->test_input($_POST['name']);
        $arr = ["email" => $email, "password" => $pass, "name" => $name];
        $response = $this->validator->validate($arr);
        if ($response != 'valid') {
            header("Location: index.php?action=LoginController_errorRegister&error=" . $response);
        } else {
            $this->userServ->registerUser($name, $email, $pass, "user");
            header("Location: index.php?action=HomeController_displayHomepage");
        }
    }

    public function errorRegister()
    {
        $this->view->assign("error", $_GET['error']);
        $this->view->show("register.php");
    }

    public function logout()
    {
        unset($_SESSION['user']);
        header("Location: index.php?action=LoginController_displayLogin");
    }

    public function logoutAdmin()
    {

        unset($_SESSION['admin']);
        header("Location: index.php?action=LoginController_displayLogin");
    }


    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


}