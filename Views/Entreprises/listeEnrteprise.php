<?php

require_once('./Views/template/header.php');

require_once('./Views/template/sidebar.php');

?>
    <div class="container-fluid" style="padding: 10px 90px;">
        <div class="row mt-5">
            <span class="h2"> LISTE DES ENTREPRISES </span>
            <div class="row mt-4">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom Entreprise</th>
                            <th>Siege Social</th>
                            <th>Nombre Employés</th>
                            <th>Date de Création</th>
                            <th>Page Web</th>
                            <th>Registre De Commerce</th>
                            <th>NINEA</th>
                            <th>Commune</th>
                            <th>Domaine</th>
                            <th>Statut Juridique</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            foreach ($entreprises as $e) {
                        ?>
                            <tr>
                                <td><?= $e->getIdEntreprise() ?></td>
                                <td><?= $e->getNomentreprise(); ?></td>
                                <td><?= $e->getSiegeSocial(); ?></td>
                                <td><?= $e->getNombreEmployes(); ?></td>
                                <td><?= $e->getDateCreation(); ?></td>
                                <td><?= $e->getPage(); ?></td>
                                <td><?= $e->getRegistre(); ?></td>
                                <td><?= $e->getNinea(); ?></td>
                                <td><?= $e->getId_commune(); ?></td>
                                <td><?= $e->getId_domaine(); ?></td>
                                <td><?= $e->getIdStatut(); ?></td>
                                <td>
                                    <a href="/NousLesFemmes/Entreprise/edit/<?=$e->getIdEntreprise()?>" class="btn btn-primary"><i class="bi bi-pen-fill"></i></a>
                                    <a href="/NousLesFemmes/Entreprise/show/<?=$e->getIdEntreprise()?>" class="btn btn-success"><i class="bi bi-plus"></i></a>
                                    <a href="/NousLesFemmes/Entreprise/delete/<?=$e->getIdEntreprise()?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                    
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php

require_once('./Views/template/footer.php');

?>