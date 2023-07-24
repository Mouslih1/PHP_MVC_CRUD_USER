<?php

$title = "liste utilisateurs";
ob_start();

?>
<div class="mb-4">
    <a href="index.php?controller=userController&action=createAction" class="btn btn-primary mb-4">Ajouter</a>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">email</th>
                <th scope="col">created_at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stagiaires as $stagiaire) : ?>
                <tr>
                    <td><?= $stagiaire->id ?></td>
                    <td><?= $stagiaire->nom ?></td>
                    <td><?= $stagiaire->prenom ?></td>
                    <td><?= $stagiaire->email ?></td>
                    <td><?= $stagiaire->created_at ?></td>
                    <td>
                        <a href="index.php?controller=userController&action=editAction&id=<?= $stagiaire->id ?>" class="btn btn-warning">Modifier</a>
                        <a href="index.php?controller=userController&action=deleteAction&id=<?= $stagiaire->id ?>" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>


<?php

$content = ob_get_clean();
include_once("views/layout.php");
?>