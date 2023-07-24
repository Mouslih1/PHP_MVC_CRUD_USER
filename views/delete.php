<?php

$title = "Supprimer utilisateurs";
ob_start();

?>

<p>Voulez-vous supprimer cette utilisateur !</p>
<a href="index.php?controller=userController&action=destroyAction&id=<?=$id?>" class="btn btn-danger">Supprimer définitévement</a>
<a href="index.php?controller=userController&action=indexAction" class="btn btn-warning">Annuller</a>

<?php

$content = ob_get_clean();
include_once("views/layout.php");

?>