<?php 
    session_start(); 
    if(!isset($_SESSION['id'])){ 
        header('Location:login.php');
    }
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
            <li><a href="don.php">Dons</a></li>
        </ul>
    </nav>
   </div>

   <div class="ins">
        
        <form action="send.php" method="post">
            <h3>Contact Form</h3>
            <input type="text" name="email" placeholder="E-mail" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea  name="message" rows="4" placeholder="How can we help you?"></textarea>
            <button type="submit" name="send">Send</button>
            
        </form>

</div>

   
   </div>
</body>
</html