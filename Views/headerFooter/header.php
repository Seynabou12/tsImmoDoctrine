<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .main{
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.5)50%, rgba(0,0,0,0.5)50%,url());
            background-position: center;
            background-size: cover;
            height: 109vh;
        }
        .navbar{
            width: 1200px;
            height: 75px;
            margin: auto;
        }
        .icon{
            width: 200px;
            float: left;
            height: 70px ;
        }
        .logo{
            color: #ff7200;
            font-size: 35px;
            font-family: Arial;
            padding-left: 20px;
            float: left;
            padding-top: 10px;
        }
        .menu{
            width: 400px;
            height: 70px;
            float: left;
        }
        ul{
            float: left;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        ul li{
            list-style: none;
            margin-left: 150px;
            margin-top: 27px;
            font-size: 14px;
        }
        ul li a{
            text-decoration: none;
            color: #fff;
            font-family: Arial;
            font-weight: bold;
            transition: 0.4 ease-in-out;
        }
        ul li a:hover{
            color: #ff7200;
        }
    </style>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Organisation</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#"></a>Accueil</li>
                    <li><a href="#"></a>listeEntreprises</li>
                    <li><a href="#"></a>AjoutEntrprises</li>
                    <li><a href="#"></a>Connexion</li>
                </ul>
            </div>
        </div>
        <div class="content">
            <h1>Recensement des <br> <span>Des Organistions</span><br>recouvreur</h1>
        </div>
    </div>
</body>
</html>