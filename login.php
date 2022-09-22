<?php
    session_start();
?>
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
        <?php if(isset($_GET['error'])){ 
                if($_GET['error'] == 'emailErr'){
            ?>
            <div class="pass">
                Cet utilisateur n'exist pas. Vérifier votre adresse email
            </div>

        <?php  }else{ ?>
            <div class="pass">
                Mot de passe incorrecte
            </div>
        <?php  
                }
            }
        ?>
   <div class="ins">
        <form method="post">
            <h3>Login</h3>
            <input type="text" name="email" placeholder="Entrer votre Email" >
            <input type="password" name="passwordd" placeholder="Entrer votre password" >
            <button type="submit">Send</button>
            <a href="inscription.php">Sign Up<a> 
            
        </form>
        
    </div>
   </div>
</body>
</html>


<?php 
    require 'connexion.php';

    if(isset($_POST['email'])){
        $email=$_POST['email'];
        $password=$_POST['passwordd'];    
        $stm = $conn->prepare("SELECT * FROM user WHERE email = ?");
        $stm->execute([$email]);
        $user = $stm->fetch();
        $stm->closeCursor();
        if($user != null){      // si cet email exist dans la base de données
            if($password == $user['password']){     // vérifier si l'email envoyer dans le formulaire est le méme que celle de l'utilisateur
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['nom'] ." ". $user['prenom'];
                header("location:index.php");
            }else{
                header("location:login.php?error=pwdErr");
            }
        }else{
            header("location:login.php?error=emailErr");
        }
    }else{
       session_unset();
       session_destroy();
    }
?>
