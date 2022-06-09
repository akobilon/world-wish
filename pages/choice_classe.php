<?php
      session_start();
      if(!isset($_SESSION['username']))
      {
            header("location: accueil.php");
      }
      include_once './modele.php';
      $player = new Player;

      $archers = $player->read('archer');
      $druides = $player->read('druide');
      $epee_boucliers = $player->read('epee_bouclier');
      $haches = $player->read('hache', 'Hache');
      $lance_boucliers = $player->read('lance_bouclier');
      $pretres = $player->read('pretre');
      $sorciers = $player->read('sorcier');

      // foreach($archers as $player){
      //       var_dump($player['arme']);
      //       die;
      // }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <title>World of Wish</title>
      <link rel="stylesheet" href="../style/style.css">
</head>
<body id="accueil_body">
      <center>
            <?php
                  if(isset($_SESSION['username'])){
                        $username = $_SESSION['username'];
                        echo '<h1 id="titre">Bienvenu '.$username.'</h1>';
                        echo '
                        <h3>Choisissez une classe pour combattre <br> Ou <br> </h3>
                        <form action="./quitter.php" method="POST">
                              <input type="submit" value="Quitter la partie" style="
                              width: 150px;
                              margin: 10px;
                              padding: 10px;
                              color: blueviolet;
                              font-size: large;
                              border-radius: 10px;
                              ">
                        </form>
                        ';
                  }
                  else{
                        echo '<h1 id="titre">Nothing</h1>';
                  }
            ?>
      </center>
      <div class="classe_form_container">
            <form id="classe_form" action="./combat.php" method="POST">
                  <?php
                        if(isset($_SESSION) && $_SESSION['team'] == 'Coallition')
                        {
                              echo'
                              <div class="classes">
                                    <div>
                                          <label for="epee">
                                                <div id="container">
                                                      <img class="accueil_img" src="../images/ok/Coallition/epee_bouclier1.jpg" alt="Coallition Team" width="300px">
                                                      <p>Guerrier avec un épée et un bouclier</p>
                                                </div>
                                          </label>
                                          <input type="radio" id="epee" name="classe" value="epee" required>
                                    </div>
                                    <div>
                                          <label for="lance">
                                                <img class="accueil_img" src="../images/ok/Coallition/lance_bouclier1.jpg" alt="Coallition Team" width="300px">
                                                <p>Guerrier avec une lance et un bouclier</p>
                                          </label>
                                          <input type="radio" id="lance" name="classe" value="lance" required>
                                    </div>
                                    <div>
                                          <label for="hache">
                                                <img class="accueil_img" src="../images/ok/Coallition/hache1.jpg" alt="Coallition Team" width="300px">
                                                <p>Guerrier avec une hache</p>
                                          </label>
                                          <input type="radio" id="hache" name="classe" value="hache" required>
                                    </div>
                                    <div>
                                          <label for="archer">
                                                <img class="accueil_img" src="../images/ok/Coallition/archer1.jpg" alt="Coallition Team" width="300px">
                                                <p>Archer</p>
                                          </label>
                                          <input type="radio" id="archer" name="classe" value="archer" required>
                                    </div>
                                    <div>
                                          <label for="sorcier">
                                                <img class="accueil_img" src="../images/ok/Coallition/sorcier1.jpg" alt="Coallition Team" width="300px">
                                                <p>Sorcier</p>
                                          </label>
                                          <input type="radio" id="sorcier" name="classe" value="sorcier" required>
                                    </div>
                                    <div>
                                          <label for="pretre">
                                                <img class="accueil_img" src="../images/ok/Coallition/pretre1.jpg" alt="Coallition Team" width="300px">
                                                <p>Prêtre</p>
                                          </label>
                                          <input type="radio" id="pretre" name="classe" value="pretre" required>
                                    </div>
                                    <div>
                                          <label for="druide">
                                                <img class="accueil_img" src="../images/ok/Coallition/druide1.jpg" alt="Coallition Team" width="300px">
                                                <p>Druide</p>
                                          </label>
                                          <input type="radio" id="druide" name="classe" value="druide" required>
                                    </div>
                              </div>
                              ';
                        }
                        elseif(isset($_SESSION) && $_SESSION['team'] == 'Collonie')
                        {
                              echo'
                              <div class="classes">
                                    <div>
                                          <label for="epee">
                                                <img class="accueil_img" src="../images/ok/Collonie/epee_bouclier2" alt="Collonie Team" width="300px">
                                                <p>Guerrier avec un épée et un bouclier</p>
                                          </label>
                                          <input type="radio" id="epee" name="classe" value="epee" required>
                                    </div>
                                    <div>
                                          <label for="lance">
                                                <img class="accueil_img" src="../images/ok/Collonie/lance_bouclier2.jpg" alt="Collonie Team" width="300px">
                                                <p>Guerrier avec une lance et un bouclier</p>
                                          </label>
                                          <input type="radio" id="lance" name="classe" value="lance" required>
                                    </div>
                                    <div>
                                          <label for="hache">
                                                <img class="accueil_img" src="../images/ok/Collonie/hache2.jpg" alt="Collonie Team" width="300px">
                                                <p>Guerrier avec une hache</p>
                                          </label>
                                          <input type="radio" id="hache" name="classe" value="hache" required>
                                    </div>
                                    <div>
                                          <label for="archer">
                                                <img class="accueil_img" src="../images/ok/Collonie/archer2.jpg" alt="Collonie Team" width="300px">
                                                <p>Archer</p>
                                          </label>
                                          <input type="radio" id="archer" name="classe" value="archer" required>
                                    </div>
                                    <div>
                                          <label for="sorcier">
                                                <img class="accueil_img" src="../images/ok/Collonie/sorcier2.jpg" alt="Collonie Team" width="300px">
                                                <p>Srocier</p>
                                          </label>
                                          <input type="radio" id="sorcier" name="classe" value="sorcier" required>
                                    </div>
                                    <div>
                                          <label for="pretre">
                                                <img class="accueil_img" src="../images/ok/Collonie/pretre2.jpg" alt="Coallition Team" width="300px">
                                                <p>Prêtre</p>
                                          </label>
                                          <input type="radio" id="pretre" name="classe" value="pretre" required>
                                    </div>
                                    <div>
                                          <label for="druide">
                                                <img class="accueil_img" src="../images/ok/Collonie/druide2.jpg" alt="Coallition Team" width="300px">
                                                <p>Druide</p>
                                          </label>
                                          <input type="radio" id="druide" name="classe" value="druide" required>
                                    </div>
                              </div>
                              ';
                        }
                  ?>
                  
                  
                  <div id="accueil_form_submit_btn">
                        <input type="submit" value="Combattre">
                  </div>
            </form>
      </div>
</body>
</html>