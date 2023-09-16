<?php
abstract class Crud extends PDO
{

    public function __construct()
    {
        parent::__construct('mysql:host=localhost; dbname=ecommerce; port=3306; charset=utf8', 'root', '');
    }


    public function select($field = 'id', $order = 'ASC')
    {
        $sql = "SELECT * FROM $this->table ORDER BY $field $order";
        $stmt = $this->query($sql);
        return $stmt->fetchAll();
    }


    /**
     * 
     */
    public function selectId($value)
    {
        $sql = "SELECT * FROM $this->table WHERE $this->primaryKey = :$this->primaryKey";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$this->primaryKey", $value);
        $stmt->execute();

        $count = $stmt->rowCount();
        if ($count == 1) {
            return $stmt->fetch();
        } else {
            header("location:../../home/error");
            exit;
        }
    }


    /**
     * Fonction qui insert les modification dans la base de données 
     * elle retourne le id de l'item modifié.
     */
    public function insert($data)
    {
        $fieldName = implode(', ', array_keys($data));
        $fieldValue = ":" . implode(', :', array_keys($data));
        $sql = "INSERT INTO $this->table ($fieldName) VALUES ($fieldValue)";

        // return $sql;

        $stmt = $this->prepare($sql);
        //doit boucler pour avoir accès à toutes les values 
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }

        if ($stmt->execute()) {
            return $this->lastInsertId();
        } else {
            print_r($stmt->errorInfo());
        }
    }



    /**
     * Fonction pour modifier une entrée 
     */
    public function update($data)
    {
        $fieldName = null;
        foreach ($_POST as $key => $value) {
            $fieldName .= "$key = :$key, ";
        }

        $fieldName = rtrim($fieldName, ', ');

        $sql = "UPDATE $this->table SET $fieldName WHERE $this->primaryKey = :$this->primaryKey";

        // return $sql;
        // die();
        
        $stmt = $this->prepare($sql);

        //doit boucler pour avoir accès à toutes les values 
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }

        if ($stmt->execute()) {
            // header('Location: ' . $_SERVER['HTTP_REFERER]);
            return true;
        } else {
            return ($stmt->errorInfo());
        }
    }
}
