<?php
      session_start();
      if(isset($_SESSION['username'])){
            header("location: choice_classe.php");
      }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>World of Wish</title>
      <link rel="stylesheet" href="../style/style.css">
</head>
<body id="accueil_body">
      
      <center>
            <h1 id="titre">World of Wish</h1>
      </center>

      <div class="form_container">
            <form id="accueil_form" action="./connexion.php" method="POST">
                  <div id="accueil_div_username">
                        <label for="username" >Nom du personnage</label>
                        <input type="text" id="username" name="username" class="text_input" required>
                  </div>
                  <div id="team">
                        <div>
                              <label for="team1">
                                    <img class="accueil_img" src="../images/ok/Coallition/team1.jpg" alt="Coallition Team" width="300px">
                                    <p>Coallition</p>
                              </label>
                              <input type="radio" id="team1" name="team" value="Coallition" required>
                        </div>
                        <div>
                              <label for="team2">
                                    <img class="accueil_img" src="../images/ok/Collonie/memoria.jpg" alt="Collonie Team" width="300px">
                                    <p>Collonie</p>
                              </label>
                              <input type="radio" id="team2" name="team" value="Collonie" required>
                        </div>
                  </div>
                  <div id="accueil_form_submit_btn">
                        <input type="submit" value="Continuer">
                  </div>
            </form>
      </div>
      
</body>
</html>