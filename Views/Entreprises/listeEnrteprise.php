<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>