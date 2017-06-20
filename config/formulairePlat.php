<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Saisie des plats</title>
    <link rel="stylesheet" href="./assets/css/formulaire.css">
  </head>
  <body>
    <div class="col2">
      <div class="formulaire">
        <div id="signIn">
          <h1>Bienvenue dans l'interface de saisie des plats</h1>

        </div>
              <form class="" action="traitementLogin.php" method="post" onSubmit="return validation(this);" enctype="multipart/form-data" >
                <p><label>Saisissez le nom du plat </label><br><input type="text" name="username" autofocus=""></p>
                  <p><label>Saisissez son prix </label><br><input type="email" name="email" autofocus=""></p>
                    <p><label>Ajoutez une image ou photo du plat</label><br><input type="img" name="image"></p>
                    <!-- <p><label>Password verification</label><br><input type="password" name="passwordVerif" value=""></p> -->

                        <!-- <div class="bouton">
                          <input type="submit" value="Sign In">
                        </div> -->
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
