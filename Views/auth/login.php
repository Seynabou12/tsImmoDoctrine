<h2>Se Connecter</h2>

<form action="/Views/auth/login.php" method="post">
    <div class="form-group">
        <label for="">Nom Utilisateur</label>
        <input type="text" name="username" classe="form-group" id="username">
    </div>
    <div class="form-group">
        <label for="">Adresse email</label>
        <input type="email" name="email" classe="form-group" id="email">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="text" name="password" classe="form-group" id="password">
    </div>
    <button type="submit" class="btn btn-primary">Se Connecter</button>
</form>