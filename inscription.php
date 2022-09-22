<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <div class="container">
   <div class="navbar">
    <img src="images/logo.png" class="logo" >
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="">Dons</a></li>
        </ul>
    </nav>
   </div>

    <div class="ins">
        <form method="post">
            <h3>Inscription</h3>
            <input type="text" name="nom" placeholder="Entrer votre Nom" >
            <input type="text" name="prenom" placeholder="Entrer votre Prenom" >
            <input type="text" name="email" placeholder="Entrer votre Email" >
            <input type="password" name="password" placeholder="Entrer votre password" >
            <button type="submit" name="envoyer">Send</button>
            <a href="Login.php">Login<a>
        </form>
    </div>
   </div>
</body>
</html>

<?php
require 'connexion.php';


if(isset($_POST['envoyer'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];   
    $email=$_POST['email'];
    $password=$_POST['password'];
    $stmt=$conn->prepare("INSERT INTO user( nom, prenom, email, password) VALUES(?,?,?,?)");
    $stmt->execute(array($nom,$prenom,$email,$password));
if($stmt)
{
    header("location:login.php");
}
    
}


?>