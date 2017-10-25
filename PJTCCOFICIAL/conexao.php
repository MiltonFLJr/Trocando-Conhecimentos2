<?php
$user = "root";
$password = "";

/* try{ */
    
$con = new PDO('mysql:host=localhost;dbname=nova',$user,$password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

/*
}catch(PDOException $e){
      echo "ERROR: ".$e->getMessage();
}
 
 */
?>