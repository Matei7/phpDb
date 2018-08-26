<?php
/**
 * Created by PhpStorm.
 * User: PC-1076
 * Date: 8/13/2018
 * Time: 10:53 AM
 */

class BaseModel
{

    private $pk;
    private $db;
    private $table;
    private $columns;

    public function __construct($table, $pk = "id")
    {
        $this->pk = $pk;
        $this->db = $_SESSION["db"];
        $this->table = $table;
        $this->getTableColumns();
    }


    public function setPK($pk)
    {
        $this->$pk = "";
        $this->pk = $pk;
    }

    public function setTable($table)
    {
        $this->table = $table;
    }


    private function getTableColumns()
    {
        $this->columns = $this->db->getColumns($this->table);
    }


    public function loadFromDb($value, $field = "id")
    {
        $sqlQuery = "SELECT * from " . $this->table . " WHERE " . $field . " = " . $value;
        $obj = $this->db->getRow($sqlQuery);
        foreach ($obj as $key => $value) {
            $this->$key = $value;
        }
    }

    public function loadFromArray($arr)
    {
        foreach ($arr as $key => $value) {
            if (in_array($key, $this->columns)) {
                $this->$key = $value;
            }
        }
    }

    public function save()
    {
        $pkLocal = $this->pk;

        if (!empty($this->$pkLocal)) {
            $this->update();
        } else {
            $this->insert();
        }
    }

    public function getIdFromLastElem()
    {
        return $this->db->getLastInsertedId();
    }

    public function toArray()
    {
        return get_object_vars($this);

    }


    public function deleteByProperty($property)
    {
        $condition = "";
        foreach ($property as $key => $value) {
            if (in_array($key, $this->columns)) {
                $condition = $condition . $key . " = " . "'" . $value . "'" . " AND ";
            }

        }
        $condition = substr($condition, 0, -4);
        $sqlQuery = "DELETE FROM " . $this->table . " WHERE " . $condition;
        $this->db->execute($sqlQuery);
    }


    public function delete($field = "id")
    {
        $condition = $field . " = '" . $this->$field . "'";
        $sqlQuery = "DELETE FROM " . $this->table . " WHERE " . $condition;
        $this->db->execute($sqlQuery);
    }

    public function insert()
    {
        $cols = "(";
        $vals = "(";
        foreach ($this->columns as $col) {
            if ($this->pk != $col) {
                $cols = $cols . $col . ',';
                $vals = $vals . "'" . $this->$col . "'" . ',';
            }
        }


        $cols = substr($cols, 0, -1);
        $vals = substr($vals, 0, -1);

        $cols = $cols . ")";
        $vals = $vals . ")";
        $sqlQuery = "INSERT INTO " . $this->table . " " . $cols . " VALUES " . $vals;
        $this->db->execute($sqlQuery);
        $this->id = $this->getIdFromLastElem();
    }

    public function update()
    {
        $pkLocal = $this->pk;
        $data = "";
        foreach ($this->columns as $col) {
            $data = $data . $col . ' = ' . "'" . $this->$col . "'" . ",";
        }
        $data = substr($data, 0, -1);
        $sqlQuery = "UPDATE " . $this->table . " SET " . $data . " WHERE " . $this->pk . " = " . $this->$pkLocal . ";";

        $this->db->execute($sqlQuery);
    }

}