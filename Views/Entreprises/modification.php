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
<div class="row">
    <div class="card-col-10 offset-1">
        <div class="card-header">
            <span class="h2">Modification Entreprise</span>
            <span class="offset-5">
                <a href="/NousLesFemmes/" class="btn btn-success">Listes des Entreprises</a>
            </span>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <input type="text" name="id">
                <div class="form-group">
                    <label for="">Nom Entreprise</label>
                    <input type="text" name="nomEntreprise" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nombre Employés</label>
                    <input type="number" name="nombre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Siege Social</label>
                    <input type="text" name="siege" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Registre Commerce</label>
                    <input type="number" name="registre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Date de Creation</label>
                    <input type="date" name="datecreation" class="form-control">
                </div>
                <div class="row">
                   <input type="submit" value="Valider" class="btn btn-primary" name="add">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
