<?php session_start(); 
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
    <link href="styl.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <div class="hihi">
   <div class="navbar">
    <img src="images/logo1.png" class="logo" >
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="don.php">Dons</a></li>
        </ul>
    </nav>
   </div>

   <div class="row">
    <div class="col">
    <div class="ins">
        
        <form method="post" >
            <h3>DONS</h3>
            <input type="text" name="phone"  placeholder="Phone Number"  required>
            <input type="text" name="one" placeholder="DON 1" required>
            <input type="text" name="two" placeholder="DON 2" required>
            <input type="text" name="three" placeholder="DON 3" required>
            <input type="text" name="four"  placeholder="DON 4"  required>
            
            <button type="submit" name="valider">Send</button>
            
        </form>

</div>    
</div>

    <div class="col">
        <div class="card card1"></div>
        <div class="card card2"></div>
        <div class="card card3"></div>
        <div class="card card4"></div>
    </div>
</div>

   

   </div>
</body>
</html>

<?php
require 'connexion.php';
if(isset($_POST['valider']))
{
    $phone=$_POST['phone'];
    $don1=$_POST['one'];
    $don2=$_POST['two'];   
    $don3=$_POST['three'];
    $don4=$_POST['four'];
    
    
$stmt=$conn->prepare("INSERT INTO dons( PhoneNumber, dons1, dons2, dons3, dons4) VALUES(?,?,?,?,?)");
$stmt->execute(array($phone,$don1,$don2,$don3,$don4)); 
if($stmt)
{
    
    header("location:don.php");
}

}


?>