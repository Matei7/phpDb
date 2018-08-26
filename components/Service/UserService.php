<?php
/**
 * Created by PhpStorm.
 * User: PC-1076
 * Date: 8/13/2018
 * Time: 4:20 PM
 */


include_once "components/Repository/UserRepository.php";
include_once "components/Model/UserModel.php";

class UserService extends BaseService
{

    public function __construct()
    {
        return parent::__construct(new UserRepository($_SESSION["db"]));
    }

    public function checkUser($email, $pass, $role)
    {
        $pass = hash('sha512', $pass, false);
        $condition = "email" . "='" . $email . "'AND password" . "='" . $pass . "' AND role" . "='" . $role . "'";
        return $this->repo->selectOne($condition);

    }

    public function registerUser($name, $email, $pass, $role)
    {
        $pass = hash("sha512", $pass, false);
        $arr = ["nume" => $name,
            "email" => $email,
            "password" => $pass,
            "role" => $role
        ];

        $userModel = new UserModel();
        $userModel->loadFromArray($arr);
        $userModel->save();

        $_SESSION['email'] = $email;
        $_SESSION['id'] = $userModel->getIdFromLastElem();
        $_SESSION['name'] = $name;
    }

    public function checkEmail($email)
    {
        $condition = "email" . "='" . $email . "'";
        $user = $this->repo->selectOne($condition);

        if ($user == null) {
            return 0;
        }
        return 1;


    }

}