<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Saisie des plats</title>
    <link rel="stylesheet" href="./assets/css/formulaire.css">

  </head>
  <body>
    <?php



    ?>

    <div class="col2">
      <div class="formulaire">
        <div id="signIn">
          <h1>Bienvenue dans l'interface de saisie des plats</h1>

        </div>
              <form class="" action="traitement.php" method="post" onSubmit="return validation(this);" enctype="multipart/form-data" >
                <p><label>Saisissez le nom du plat </label><br><input type="text" name="nom" autofocus=""></p>
                  <p><label>Saisissez son prix </label><br><input type="text" name="prix" autofocus=""></p>
                   <p><label for="">Importez une image</label><br><input type="file" name="image" value=""></p>
                  <!-- <p><label>Password verification</label><br><input type="password" name="passwordVerif" value=""></p> -->

                        <div class="bouton">
                          <input type="submit" value="Valider">
                        </div>
                      </form>

          <!-- <div id="signInWith">
                  <ul><p>sign in with:</p>
                    <li><a href="www.github.fr"><img src="./assets/img/logoGitHub.png" alt="GitHub"></a></li>
                        <li><a href="www.facebook.com"><img src="./assets/img/logoFacebook.png" alt="Facebook"></a></li>
                          <li><a href="www.google.fr"><img src="./assets/img/logoGoogle.png" alt="Google"></a></li>
                  </ul>
          </div> -->

            <!-- <div class="footer">
              <p>© 2017 Code School LLC. <a href="#">Privacy Policy</a></p>
            </div> -->
          </div>

          </div>
  </body>
</html>
