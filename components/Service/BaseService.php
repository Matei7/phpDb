<?php
/**
 * Created by PhpStorm.
 * User: Matei
 * Date: 8/11/2018
 * Time: 18:32
 */


require_once "utils/utils.php";
require_once "utils/db.php";
require_once "components/Repository/BaseRepository.php";

abstract class BaseService
{
    public $repo;

    /**
     * BaseService constructor.
     * @param $repo
     */
    public function __construct($repo)
    {
        $this->repo = $repo;
    }


    public function selectAll()
    {
        return $this->repo->selectAll();
    }

    public function getOne($desiredResult, $condition)
    {
        return $this->repo->getOne($desiredResult, $condition);
    }

    public function selectOne($condition)
    {
        return $this->repo->selectOne($condition);
    }

    public function update($sqlQuery)
    {
        return $this->repo->update($sqlQuery);
    }

    public function delete($condition)
    {
        return $this->repo->delete($condition);
    }

    public function insert($sqlQuery)
    {
        return $this->repo->insert($sqlQuery);
    }


    public function customSelect($sqlQuery)
    {
        return $this->repo->customSelect($sqlQuery);
    }

}