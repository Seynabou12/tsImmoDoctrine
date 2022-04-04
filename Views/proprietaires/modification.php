
<?php

require_once('./Views/template/header.php');

require_once('./Views/template/sidebar.php');

?>
<div class="container">
<div class="row">
    <div class="card mt-4">
        <div class="card-header">
            <span class="h2">Modifier un Proprietaire</span>
            <span class="offset-5">
                <a href="/testDoctrine/Proprietaire/liste" class="btn btn-success">Listes des Proprietaires</a>
            </span>
        </div>
        <div class="card-body">
            <form action="/testDoctrine/Proprietaire/edit/<?= $entreprise->getIdProprietaire()?>" class="row mt-4" method="post">
               
                <div class="form-group col-md-6">
                    <label for="">Nom Proprietaire</label>
                    <input type="text" name="nom" class="form-control" value="<?= $proprietaire->getNom() ?>" required> 
                </div>
                <div class="form-group col-md-6">
                    <label for="">Prenom Proprietaire</label>
                    <input type="text" name="prenon" class="form-control" value="<?= $proprietaire->getPrenom() ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Adresse</label>
                    <input type="text" name="adresse" value="<?= $proprietaire->getAdresse() ?>" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Telepone</label>
                    <input type="text" name="telephone" value="<?= $proprietaire->getTelephone() ?>" class="form-control" required>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="">Civilites</label>
                    <input type="text" name="civilites" value="<?= $proprietaire->getCivilites() ?>" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="">Sexe</label>
                    <input type="number" name="registre" value="<?= $proprietaire->getSexe() ?>" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="">Date de Naissance</label>
                    <input type="date" name="date" value="<?= $proprietaire->getDate_naissance() ?>" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Lieu de Naissance</label>
                    <input type="text" name="ninea" value="<?= $proprietaire->getDate_naissance() ?>" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Email</label>
                    <input type="email" name="email" value="<?= $proprietaire->getEmail() ?>" class="form-control">
                </div>

                <div class="mt-4">
                   <input type="submit" value="Modifier" class="btn btn-primary" name="modifier">
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
<?php

require_once('./Views/template/footer.php');

?>
