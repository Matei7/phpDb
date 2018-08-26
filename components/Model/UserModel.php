<?php
/**
 * Created by PhpStorm.
 * User: PC-1076
 * Date: 8/23/2018
 * Time: 4:05 PM
 */
include_once "components/Model/BaseModel.php";

class UserModel extends BaseModel
{
    public function __construct()
    {
        return parent::__construct('user');
    }
}