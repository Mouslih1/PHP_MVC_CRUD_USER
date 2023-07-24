<?php

$title = "Ajouter utilisateurs";
ob_start();

?>

<form action="index.php?controller=userController&action=storeAction" method="POST">
  <div class="mb-3">
    <label for="nom" class="form-label">nom</label>
    <input type="text" class="form-control" name="nom">
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">prenom</label>
    <input type="text" class="form-control" name="prenom">
  </div> 
  <div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <input type="submit" class="btn btn-primary" value="Ajouter">
</form>

<?php

$content = ob_get_clean();
include_once("views/layout.php");

?>