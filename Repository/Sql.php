<?php

namespace Repository;

use \PDO;
use \PDOException;
use \Exception;

class Sql extends PDO
{
    private object $conn;
    private object $stmt;
    

    public function __construct()
    {
        try {

            $this->conn = new PDO(DATABASE.":host=".HOST.";port=".PORT.";dbname=".DBNAME, DBUSER, DBPASS);

        } catch (PDOException $e) {
            
            echo json_encode(array(

                "status" => "erro",
                "retorno" => "Erro ao conectar com o banco de dados." 
            ));
        }
    }

    public function setParam($key, $value)
    {
        $this->stmt->bindParam($key, $value);
    }
    
    public function setParams($params = array())
    {
        foreach($params as $key => $value) {

            $this->setParam($key, $value);
        }
    }

    public function allQuery($rawQuery, $params = array())
    {
        $this->stmt = $this->conn->prepare($rawQuery);

        $this->setParams($params);

        return $this->stmt->execute();
    }

    public function selectQuery($rawQuery, $params = array())
    {
        $this->allQuery($rawQuery, $params);

        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}