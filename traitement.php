<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Traitement de la saisie</title>
    <link rel="stylesheet" href="./assets/css/formulaire.css">

  </head>
  <body>
    <?php
    include('./config/connexion.php');

    try
    {
      $req = $bdd->prepare('INSERT INTO plat (nom, prix, image) VALUES (:nom, :prix, :image)');
      $req->execute(array(
        'nom' => $_POST['nom'],
        'prix' => $_POST['prix'],
        'image' => $_FILES['image']['name'],
      ));

    // echo "plat saisi";
    }
    catch (Exception $e)
    {
      echo "votre plat n'est pas enregistré dans la liste";
      die('Erreur : ' . $e->getMessage());
    }

    // GESTION DE L'UPLOAD DE L'IMAGE
    // test de l'upload et de l'absence d'erreur
    if (isset($_FILES['image']) AND $_FILES['image']['error']==0)
    {
    // vérification de la taille
      if ($_FILES['image']['size'] <= 1000000)
      {
    // vérification du format
      $infosfichier = pathinfo($_FILES['image']['name']);
      $extension_upload = $infosfichier['extension'];
      $extensions_autorisees = array('jpg', 'png', 'pdf', 'jpeg');
          if (in_array($extension_upload, $extensions_autorisees))
          {
    //validation et stockage du fichier
    move_uploaded_file($_FILES['image']['tmp_name'], '/var/www/html/exoRestaurant/uploads/' . basename($_FILES['image']['name']));
    echo "L'envoi a bien été effectué !";
          }
      }
    }
     ?>


    </body>

    </html>
