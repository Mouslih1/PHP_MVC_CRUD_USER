<?php

namespace Controllers;

class userController extends Controller
{
    protected $modelName = \Models\User::class;

    public function indexAction()
    {
        $stagiaires = $this->model->findAll();
        require_once("views/listeUser.php");
    }

    public function createAction()
    {
        require_once("views/create.php");
    }

    public function storeAction()
    {
        $nom = null;

        if (!empty($_POST['nom'])) {
            $nom = $_POST['nom'];
        }

        $prenom = null;
        if (!empty($_POST['prenom'])) {
            $prenom = $_POST['prenom'];
        }

        $email = null;
        if (!empty($_POST['email'])) {
            $email = $_POST['email'];
        }

        $password = null;
        if (!empty($_POST['password'])) {
            $password = $_POST['password'];
        }

        if (!$nom || !$prenom || !$email || !$password) {
            die("il doit remplir les champs tout d'abord !");
        }

        $this->model->insert();
        header("location: index.php?controller=userController&action=indexAction");
    }

    public function editAction()
    {
        $id = $_GET['id'];
        $stagiaire = $this->model->find($id);
        require_once("views/edit.php");
    }

    public function updateAction()
    {
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $this->model->update($id, $nom, $prenom, $email, $password);
        header("location: index.php?controller=userController&action=indexAction");
    }

    public function deleteAction()
    {
        $id = $_GET['id'];
        require_once("views/delete.php");
    }

    public function destroyAction()
    {
        $id = $_GET['id'];
        $this->model->destroy($id);
        header("location: index.php?controller=userController&action=indexAction");
    }
}
