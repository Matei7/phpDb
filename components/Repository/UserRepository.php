<?php
/**
 * Created by PhpStorm.
 * User: PC-1076
 * Date: 8/13/2018
 * Time: 4:18 PM
 */

include_once "BaseRepository.php";

class UserRepository extends BaseRepository
{
    public function __construct(Database $db)
    {
        $this->table = "user";
        return parent::__construct($db);
    }
}