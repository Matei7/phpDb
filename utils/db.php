<?php

class Database
{
    private $conn;
    private $servername;
    private $username;
    private $password;
    private $dbname;

    /**
     * Database constructor.
     * Initialzare unui obiect de tip Database care primeste ca parametrii:
     * @param $servername
     * @param $username
     * @param $password
     * @param $dbname
     */
    public function __construct($servername, $username, $password, $dbname)
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;

        $this->connectToDb();
    }


    /**
     * Realizare conexiunii cu baza de date pe folosind parametrii transmisi la crearea obiectului
     */
    private function connectToDb()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }


    /**
     * @param $sqlQuery
     * @return array
     *
     * Primeste un query de tip SQL si returneaza un array care contine toate entry-urile care satisfac query-ul trimis
     */
    public function getAll($sqlQuery)
    {
        //   $result = $this->executeQuery($sqlQuery);
        $result = mysqli_query($this->conn, $sqlQuery);
        $queryResult = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {

                $queryResult[] = $row;
            }
        }
        //  var_dump($queryResult);
        return $queryResult;
    }


    /**
     * @param $sqlQuery
     * @return mixed
     *
     * Primeste un query de tip SQL si returneaza un obiect care satisface query-ul trimis
     */
    public function getRow($sqlQuery)
    {
        $res = mysqli_fetch_assoc($this->executeQuery($sqlQuery));
        return $res;
    }


    /**
     * @param $sqlQuery
     * @return mixed
     *
     * Primeste un query de tip SQL si returneaza valoarea cautata
     */

    public function getOne($sqlQuery)
    {
        $result = $this->conn->query($sqlQuery);

        $res = $result->fetch_assoc();
        return reset($res);

    }


    /**
     * @param $sqlQuery
     * @return string
     *
     * Primeste un SQL query pentru a face un update/insert/delete si returneaza daca operatia a fost realizata cu succes sau daca a aparut o eroare se returneaza eroarea respectiva
     */
    public function execute($sqlQuery)
    {
        return $this->executeQuery($sqlQuery);
    }

    public function executeQuery($sqlQuery)
    {
        $res = mysqli_query($this->conn, $sqlQuery);
        if (!$res) {
            echo mysqli_error($this->conn);
        }
        return $res;
    }

    public function getLastInsertedId()
    {
        return $this->conn->insert_id;
    }


    public function getColumns($table)
    {
        $sql = "SHOW COLUMNS FROM " . $table;
        $result = mysqli_query($this->conn, $sql);
        while ($record = mysqli_fetch_array($result)) {
            $fields[] = $record['0'];
        }
        return $fields;
    }
}