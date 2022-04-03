<?php

require_once('./Views/template/header.php');

require_once('./Views/template/sidebar.php');

?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 text-center">
                <h1>ENREGISTRER UN PROPRIETAIRE</h1>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">

    <form action="/testDoctrine/Proprietaire/add" class="mt-4" method="post">

        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Ajouter un propriétaire</h3>
            </div>
        </div>
        <div class="card mt-4">

            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Nom Propriétaire</label>
                        <input type="text" name="nom" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Prenom Propriétaire</label>
                        <input type="text" name="prenom" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Adresse</label>
                        <input type="text" name="adresse" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Civilités</label>
                        <input type="text" name="civilites" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Téléphone</label>
                        <input type="text" name="telephone" class="form-control" required>
                    </div>
                </div> 
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Sexe</label>
                        <input type="text" name="sexe" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Date de Naissance</label>
                        <input type="date" name="dateNaissance" class="form-control" required>
                    </div>
                </div>  
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Lieu de Naissance</label>
                        <input type="text" name="lieuNaissance" class="form-control" required>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <input type="submit" value="Enregistrer" class="btn btn-primary" name="add">
                </div>
            </div>
        </div>

    </form>
</div>
</div>

<?php

require_once('./Views/template/footer.php');

?>