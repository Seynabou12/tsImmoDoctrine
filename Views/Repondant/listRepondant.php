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
            <span class="h2"> LISTE DES REPONDANTS </span>
           
            <div class="row mt-4">
                <table class="table table-bordered table-striped">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom Repondant</th>
                            <th>Prenom Repondant</th>
                            <th>Telephone Repondant</th>
                            <th>Email Repondant</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            foreach ($repondants as $e) {
                        ?>
                            <tr>
                                <td><?= $e->getIdRepondant() ?></td>
                                <td><?= $e->getNomRepondant(); ?></td>
                                <td><?= $e->getPrenomRepondant(); ?></td>
                                <td><?= $e->getEmail(); ?></td>
                                <td><?= $e->getTelephone(); ?></td>
                                <td>
                                    <a href="/NousLesFemmes/Repondant/edit/<?=$e->getIdRepondant()?>" class="btn btn-primary"><i class="bi bi-pen-fill"></i></a>
                                    <a href="#" class="btn btn-success"><i class="bi bi-plus"></i></a>
                                    <a href="/NousLesFemmes/Repondant/delete/<?=$e->getIdRepondant()?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                    
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