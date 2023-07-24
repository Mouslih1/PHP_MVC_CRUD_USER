<?php

namespace Models;

class User extends Model
{
    protected $table = "users";

    public function insert()
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashpassword = password_hash($password, PASSWORD_DEFAULT);
        $query = $this->pdo->prepare("INSERT INTO {$this->table} VALUES(null,?,?,?,null,?,NOW())");
        $query->execute([$nom, $prenom, $email, $hashpassword]);
    }

    public function update($id, $nom, $prenom, $email, $password)
    {
        $hashpassword = password_hash($password, PASSWORD_DEFAULT);
        $query = $this->pdo->prepare("UPDATE {$this->table} SET nom = ? ,prenom = ? ,email = ? ,password = ? WHERE id = ?");
        $query->execute([$nom, $prenom, $email, $hashpassword, $id]);
    }

}
