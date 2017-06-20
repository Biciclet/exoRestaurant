
 <?php

  try
 {

     $bdd = new PDO('mysql:host=localhost; dbname=restaurant; charset=utf8', 'root', '33forza');
     $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch (Exception $e)
 {
   die('Erreur : ' . $e->getMessage());
 }


 ?>
