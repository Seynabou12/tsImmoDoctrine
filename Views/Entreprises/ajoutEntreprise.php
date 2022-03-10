<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">

</head>
<body>
<div class="container">
<div class="row">
    <div class="card mt-4">
        <div class="card-header">
            <span class="h2">Nouvelle Entreprise</span>
            <span class="offset-5">
                <a href="" class="btn btn-success" name="add">Listes des Entreprises</a>
            </span>
        </div>
        <div class="card-body">
            <form action="/NousLesFemmes/Entreprise/add" class="row mt-4" method="post">
               
                <div class="form-group col-md-6">
                    <label for="">Nom Entreprise</label>
                    <input type="text" name="nomEntreprise" class="form-control" required> 
                </div>
                <div class="form-group col-md-6">
                    <label for="">Nombre Employés</label>
                    <input type="number" name="nombre" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Siege Social</label>
                    <input type="text" name="siege" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Date de Creation</label>
                    <input type="date" name="datecreation" class="form-control" required>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="">Page Web</label>
                    <input type="text" name="page" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="">Registre Commercial</label>
                    <input type="number" name="registre" class="form-control">
                </div>

                <div class="form-group col-md-6" id="idDomaine">
                        <label for="idClient" class="control-label">Domaine</label>
                        <select name="idDomaine" id="idDomaine" class="form-control">
                            <option value="0">--domaine--</option>
                            <?php
                            foreach ($domaines as $domaine) {
                            ?>
                                <option value="<?php echo $domaine['idDomaine']; ?>"><?php echo $domaine['libelle']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                <div class="form-group col-md-6" id="idStatut">
                        <label for="idStatut" class="control-label">Statut Juridiques</label>
                        <select name="idStatut" id="idStatut" class="form-control">
                            <option value="0">--statut juridiques--</option>
                            <?php
                            foreach ($statuts as $statut) {
                            ?>
                                <option value="<?php echo $statut['idStatutJuridique']; ?>"><?php echo $statut['libelle']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                <div class="form-group col-md-6" id="idCommune">
                        <label for="idCommune" class="control-label">Commune</label>
                        <select name="idCommune" id="idCommune" class="form-control" >
                            <option value="0">--commune--</option>
                            <?php
                            foreach ($communes as $commune) {
                            ?>
                                <option value="<?php echo $commune['idCommune']; ?>"><?php echo $commune['libelle']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                <div class="mt-4">
                   <input type="submit" value="Enregistrer" class="btn btn-primary" name="add">
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

