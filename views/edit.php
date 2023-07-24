<?php

$title = "modifier utitlisateurs !";
ob_start();

?>

<form action="index.php?controller=userController&action=updateAction" method="POST">
    <div class="mb-3">
        <input type="hidden" class="form-control" name="id" value="<?= $stagiaire->id ?>">
    </div>
    <div class="mb-3">
        <label for="nom" class="form-label">nom</label>
        <input type="text" class="form-control" name="nom" value="<?= $stagiaire->nom ?>">
    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">prenom</label>
        <input type="text" class="form-control" name="prenom" value="<?= $stagiaire->prenom ?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <input type="email" class="form-control" name="email" value="<?= $stagiaire->email ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label> 
        <input type="password" class="form-control" name="password" >
    </div>
    <input type="submit" class="btn btn-primary" value="Modifier">
</form>

<?php

$content = ob_get_clean();
include_once("views/layout.php");

?>