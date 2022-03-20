<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="/NousLesFemmes/Public/Style/css.css">
</head>

<body>
    <div class="loginbox">
        <img src="/NousLesFemmes/Public/image/avatar-homme.png" class="avatar">
        <h1>SE CONNECTER</h1>
        <form action="/NousLesFemmes/User/login" method="POST">
            <p>Adresse Email</p>
            <input type="text" name="email" placeholder="Votre adresse email">
            <p>Mot de Pass</p>
            <input type="password" name="password" placeholder="Votre mot de passe">
            <input type="submit" name="login" value="login">
            <a href="#">Mot de passe</a><br>
            <a href="#">J'ai pas de Compte</a>
        </form>
    </div>
</body>
</html>