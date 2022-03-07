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
    <div class="container">
        <div class="row">
            <span class="h2"> LISTE DES ENTREPRISES </span>
            <span class="mt-2">
                <a href="/NousLesFemmes/Entreprise/add" class="btn btn-danger">Ajouter une Entreprise</a>
            </span>
            <div class="row mt-4">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom Entreprise</th>
                            <th>Siege Social</th>
                            <th>Nombre Employés</th>
                            <th>Date de Création</th>
                            <!-- <th>Registre De Commerce</th> -->
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
                                <td>
                                    <a href="/NousLesFemmes/index.php?view=modification&id=1" class="btn btn-primary"><i class="bi bi-pen-fill"></i></a>
                                    <a href="" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        <?php
                        }

                        ?>

                        <!-- <tr>
                            <td>1</td>
                            <td>ONG</td>
                            <td>Colobane</td>
                            <td>50</td>
                            <td>10-05-2021</td>
                            <td>435772</td>
                            <td>
                                <a href="/NousLesFemmes/index.php?view=modification&id=1" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>