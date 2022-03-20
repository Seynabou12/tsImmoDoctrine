<?php

require_once('./Views/template/header.php');

require_once('./Views/template/sidebar.php');

?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <span class="h2">Les Informations de l'Entreprise</span>
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

                    <div class="form-group col-md-6">
                        <label for="">NINEA</label>
                        <input type="text" name="ninea" class="form-control">
                    </div>

                    <div class="form-group col-md-6" id="idDomaine">
                        <label for="idDomaine" class="control-label">Domaine</label>
                        <select name="idDomaine" id="idDomaine" class="form-control" required>
                            <option value="">--domaine--</option>
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
                        <select name="idStatut" id="idStatut" class="form-control" required>
                            <option value="">--statut juridiques--</option>
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
                        <select name="idCommune" id="idCommune" class="form-control" required>
                            <option value="">--commune--</option>
                            <?php
                            foreach ($communes as $commune) {
                            ?>
                                <option value="<?php echo $commune['idCommune']; ?>"><?php echo $commune['libelleCommune'] ?></option>
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

<?php

require_once('./Views/template/footer.php');

?>