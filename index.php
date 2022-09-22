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

            <?php if(!isset($_SESSION['id'])){ ?>
                <li><a href="login.php">Login</a></li>
            <?php } else{ ?>
                <li><a><?php echo $_SESSION['username'] ?></a></li>
                <li><a href="login.php">Logout</a></li>
            <?php } ?>

            <li><a href="contact.php">Contact</a></li>
            <li><a href="don.php">Dons</a></li>
        </ul>
    </nav>
   </div>

   <div class="row">
    <div class="col">
        <h1>WEAR-B</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore aliquid, tempore nemo amet qui quasi et sequi, incidunt, molestiae fugiat porro fuga facere
             non aperiam. Perspiciatis harum veritatis dolores assumenda.</p>
             <?php if(!isset($_SESSION['id'])){ ?>
                <a href="Login.php"><button >Login</button><a>
            <?php }else{ ?>
                <a href="don.php"><button >Dons</button><a>
            <?php } ?>
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
</html