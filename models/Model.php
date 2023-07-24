<?php

namespace Models;

use PDO;
use Database;

/*
require_once("Database.php");
*/

abstract class Model
{
    protected $pdo;
    protected $table;

    public function __construct()
    {
        $this->pdo = Database::getPDO();
    }

    public function findAll(?string $order = "")
    {
        $query = "SELECT * FROM {$this->table}"; 
        if($order)
        {
            $query.="ORDER BY".$order;
        }
        $result = $this->pdo->query($query);
        $item = $result->fetchAll(PDO::FETCH_OBJ);
        return $item;
    }

    public function find($id)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = ?");
        $query->execute([$id]);
        $item = $query->fetch(PDO::FETCH_OBJ);
        return $item;
    }

    public function destroy($id)
    {
        $query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = ?");
        $query->execute([$id]);
    }

}