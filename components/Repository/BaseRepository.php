<?php

class BaseRepository
{
    private $db;
    protected $table;

    /**
     * BaseRepository constructor.
     * @param Database $db
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function insert($sqlQuery)
    {
        return $this->db->execute($sqlQuery);
    }

    public function selectAll()
    {
        $sqlQuery = "SELECT * FROM " . $this->table;
        return $this->db->getAll($sqlQuery);
    }

    public function selectOne($condition)
    {
        $sqlQuery = "SELECT * from " . $this->table . " WHERE " . $condition;
        return $this->db->getRow($sqlQuery);
    }

    public function update($sqlQuery)
    {
        return $this->db->execute($sqlQuery);
    }

    public function delete($condition)
    {
        $sqlQuery = "DELETE from " . $this->table . " WHERE " . $condition;
        return $this->db->execute($sqlQuery);
    }

    public function customSelect($sqlQuery)
    {
        return $this->db->getAll($sqlQuery);
    }


    public function getOne($desiredResult, $condition)
    {
        $sqlQuery = "SELECT" . $desiredResult . " from " . $this->table . " WHERE" . $condition;
        return $this->db->getOne($sqlQuery);
    }

    public function setTable($table)
    {
        $this->table = $table;
    }

    public function getCustomOne($sqlQuery)
    {
        return $this->db->getOne($sqlQuery);
    }


}