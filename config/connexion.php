
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



 try
 {
   $req = $bdd->prepare('INSERT INTO plat (nom, prix, image) VALUES(:nom, :prix, :image)');
   $req->execute(array(
     'nom' => $_POST['nom'],
     'prix' => $_POST['prix'],
     'image' => $_POST['image']
   ));

 echo "plat saisi";
 }
 catch (Exception $e)
 {
   echo "votre plat est enregistré dans la liste";
   //die('Erreur : ' . $e->getMessage());
 }

 ?>
