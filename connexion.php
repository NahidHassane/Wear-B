<?php
    
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="wear";
     
    try{
            
            $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           // echo "la connexion a été bien établie";
    }
    catch(PDOException $e){
            echo "la connexion a echoué :". $e->getMessage();   
    }
   
   ?>
  

