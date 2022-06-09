<?php
      session_start();
      if(!isset($_SESSION['username']))
      {
            header("location: accueil.php");
      }

      if($_SESSION['team'] == 'Coallition')
      {
            $team = 1;
      }
      else{
            $team = 2;
      }
      $player_classe = $_POST['classe'];

      include_once './modele.php';
      $someplayer = new Player;
      
      if(isset($_SESSION) && $player_classe == 'epee')
      {
            $epee_boucliers = $someplayer->read('epee_bouclier');
            foreach($epee_boucliers as $epee_bouclier){
                  $player = $epee_bouclier;
            }
      }
      elseif(isset($_SESSION) && $player_classe == 'lance')
      {
            $lance_boucliers = $someplayer->read('lance_bouclier');
            foreach($lance_boucliers as $lance_bouclier){
                  $player = $lance_bouclier;
            }
      }
      elseif(isset($_SESSION) && $player_classe == 'hache')
      {
            $haches = $someplayer->read('hache');
            foreach($haches as $hache){
                  $player = $hache;
            }
      }
      elseif(isset($_SESSION) && $player_classe == 'archer')
      {
            $archers = $someplayer->read('archer');
            foreach($archers as $archer){
                  $player = $archer;
            }
      }
      elseif(isset($_SESSION) && $player_classe == 'sorcier')
      {
            $sorciers = $someplayer->read('sorcier');
            foreach($sorciers as $sorcier){
                  $player = $sorcier;
            }
      }
      elseif(isset($_SESSION) && $player_classe == 'pretre')
      {
            $pretres = $someplayer->read('pretre');
            foreach($pretres as $pretre){
                  $player = $pretre;
            }
      }
      elseif(isset($_SESSION) && $player_classe == 'druide')
      {
            $druides = $someplayer->read('druide');
            foreach($druides as $druide){
                  $player = $druide;
            }
      }

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
<body style="background-image: url('../images/ok/bg1.jpg');">
      <?php
            if(isset($_SESSION['username'])){
                  $username = $_SESSION['username'];
                  echo '
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
      <div class="combat_form_container">
            <div id="classe_form">
            <?php
                  echo '<h1 id="titre">'.$username.'</h1>';
                  if(isset($_SESSION) && $player_classe == 'epee')
                  {
                        echo'
                              <div id="player">
                                    <div class="hp" style="background-color: snow; color: green; width:'.$player['sante'].'px"> LP : <p class="p_hp">'.$player['sante'].'</p></div>
                                    <img class="combat_img" src="../images/ok/'.$_SESSION['team'].'/epee_bouclier'.$team.'.jpg" alt="Coallition Team" width="300px">
                                    <div class="combat_btn">
                                          <button class="atq">Attaquer : <p class="p_atq">'.$player['attaque'].'</p></button>
                                    </div>
                                    <div class="combat_btn">
                                          <button class="special spc">Parer</button>
                                    </div>
                              </div>
                        ';
                  }
                  elseif(isset($_SESSION) && $player_classe == 'lance')
                  {
                        echo'
                              <div id="player">
                                    <div class="hp" style="background-color: snow; color: green; width:'.$player['sante'].'px"> LP : <p class="p_hp">'.$player['sante'].'</p></div>
                                    <img class="combat_img" src="../images/ok/'.$_SESSION['team'].'/lance_bouclier'.$team.'.jpg" alt="Coallition Team" width="300px">
                                    <div class="combat_btn">
                                          <button class="atq">Attaquer : <p class="p_atq">'.$player['attaque'].'</p></button>
                                    </div>
                                    <div class="combat_btn">
                                          <button class="special spc">Parer</button>
                                    </div>
                              </div>
                        ';
                  }
                  elseif(isset($_SESSION) && $player_classe == 'hache')
                  {
                        echo'
                              <div id="player">
                                    <div class="hp" style="background-color: snow; color: green; width:'.$player['sante'].'px"> LP : <p class="p_hp">'.$player['sante'].'</p></div>
                                    <img class="combat_img" src="../images/ok/'.$_SESSION['team'].'/hache'.$team.'.jpg" alt="Coallition Team" width="300px">
                                    <div class="combat_btn">
                                          <button class="atq">Attaquer : <p class="p_atq">'.$player['attaque'].'</p></button>
                                    </div>
                                    <div class="combat_btn">
                                          <button class="special spc">Parer</button>
                                    </div>
                              </div>
                        ';
                  }
                  elseif(isset($_SESSION) && $player_classe == 'archer')
                  {
                        echo'
                              <div id="player">
                                    <div class="hp" style="background-color: snow; color: green; width:'.$player['sante'].'px"> LP : <p class="p_hp">'.$player['sante'].'</p></div>
                                    <img class="combat_img" src="../images/ok/'.$_SESSION['team'].'/archer'.$team.'.jpg" alt="Coallition Team" width="300px">
                                    <div class="combat_btn">
                                          <button class="atq">Attaquer : <p class="p_atq">'.$player['attaque'].'</p></button>
                                    </div>
                                    <div class="combat_btn">
                                          <button class="special">Tir :<p class="spc"> </p></button>
                                    </div>
                              </div>
                        ';
                  }
                  elseif(isset($_SESSION) && $player_classe == 'sorcier')
                  {
                        echo'
                              <div id="player">
                                    <div class="hp" style="background-color: snow; color: green; width:'.$player['sante'].'px"> LP : <p class="p_hp">'.$player['sante'].'</p></div>
                                    <img class="combat_img" src="../images/ok/'.$_SESSION['team'].'/sorcier'.$team.'.jpg" alt="Coallition Team" width="300px">
                                    <div class="combat_btn">
                                          <button class="atq">Attaquer : <p class="p_atq">'.$player['attaque'].'</p></button>
                                    </div>
                                    <div class="combat_btn">
                                          <button class="special">Boule de feu :<p class="spc"> '.$player['boule_de_feu'].'</p></button>
                                    </div>
                              </div>
                        ';
                  }
                  elseif(isset($_SESSION) && $player_classe == 'pretre')
                  {
                        echo'
                              <div id="player">
                                    <div class="hp" style="background-color: snow; color: green; width:'.$player['sante'].'px"> LP : <p class="p_hp">'.$player['sante'].'</p></div>
                                    <img class="combat_img" src="../images/ok/'.$_SESSION['team'].'/pretre'.$team.'.jpg" alt="Coallition Team" width="300px">
                                    <div class="combat_btn">
                                          <button class="atq">Attaquer : <p class="p_atq">'.$player['attaque'].'</p></button>
                                    </div>
                                    <div class="combat_btn">
                                          <button class="special">Pouvoir sacré :<p class="spc"> '.$player['pouvoir_sacre'].'</p></button>
                                    </div>
                              </div>
                        ';
                  }
                  elseif(isset($_SESSION) && $player_classe == 'druide')
                  {
                        echo'
                              <div id="player">
                                    <div class="hp" style="background-color: snow; color: green; width:'.$player['sante'].'px"> LP : <p class="p_hp">'.$player['sante'].'</p></div>
                                    <img class="combat_img" src="../images/ok/'.$_SESSION['team'].'/druide'.$team.'.jpg" alt="" width="300px">
                                    <div class="combat_btn">
                                          <button class="atq">Attaquer : <p class="p_atq">'.$player['attaque'].'</p></button>
                                    </div>
                                    <div class="combat_btn">
                                          <button class="special">Pouvoir naturel :<p class="spc"> '.$player['pouvoir_naturel'].'</p></button>
                                    </div>
                              </div>
                        ';
                  }
            ?>
            </div>
            
            <div id="classe_form">
                  <?php
                        $classe_list = ['epee_bouclier', 'lance_bouclier', 'hache', 'archer', 'sorcier', 'pretre', 'druide'];
                        $computer_classe = $classe_list[random_int(0, 6)];
                        $computers = $someplayer->read($computer_classe);
                        foreach($computers as $comp){
                              $computer = $comp;
                        }
                        // var_dump($computer);
                        // die;
                        echo '<h1 id="titre">IA</h1>';
                        if($_SESSION['team'] == 'Coallition')
                        {
                              echo'
                              <div id="player">
                                    <div class="ia_hp" style="background-color: snow; color: green; width:'.$computer['sante'].'px"> LP : <p class="ia_hp_hp">'.$computer['sante'].'</p></div>
                                    <img class="combat_img" src="../images/ok/Collonie/'.$computer_classe.'2.jpg" alt="" width="300px">
                                    <div class="combat_btn">
                                          <button class="ia_atq" disabled>Attaquer : <p class="ia_atq_point">'.$computer['attaque'].'</p></button>
                                    </div>
                              ';
                        }
                        elseif($_SESSION['team'] == 'Collonie')
                        {
                              echo'
                              <div id="player">
                                    <div class="ia_hp" style="background-color: snow; color: green; width:'.$computer['sante'].'px"> LP : <p class="ia_hp_hp">'.$computer['sante'].'</p></div>
                                    <img class="combat_img" src="../images/ok/Coallition/'.$computer_classe.'1.jpg" alt="Coallition Team" width="300px">
                                    <div class="combat_btn">
                                          <button class="ia_atq" disabled>Attaquer : <p class="ia_atq_point">'.$computer['attaque'].'</p></button>
                                    </div>
                              ';
                        }
                        if($computer_classe == 'epee_bouclier'
                              or $computer_classe == 'lance_bouclier'
                              or $computer_classe == 'hache')
                        {
                              echo'
                                    <div class="combat_btn">
                                          <button class="ia_special ia_spc" disabled>Parer</button>
                                    </div>
                              </div>
                              ';
                        }
                        elseif($computer_classe == 'archer')
                        {
                              echo '
                                    <div class="combat_btn">
                                          <button class="ia_special" disabled>Tir :<p class="ia_spc"> '.round($computer['attaque']*1.5).'</p></button>
                                    </div>
                              </div>
                              ';
                        }
                        elseif($computer_classe == 'sorcier')
                        {
                              echo '
                                    <div class="combat_btn">
                                          <button class="ia_special" disabled>Boule de Feu :<p class="ia_spc"> '.$computer['boule_de_feu'].'</p></button>
                                    </div>
                              </div>
                              ';
                        }
                        elseif($computer_classe == 'pretre')
                        {
                              echo '
                                    <div class="combat_btn">
                                          <button class="ia_special" disabled>Pouvoir Sacré :<p class="ia_spc"> '.$computer['pouvoir_sacre'].'</p></button>
                                    </div>
                              </div>
                              ';
                        }
                        elseif($computer_classe == 'druide')
                        {
                              echo '
                                    <div class="combat_btn">
                                          <button class="ia_special" disabled>Pouvoir Naturel :<p class="ia_spc"> '.$computer['pouvoir_naturel'].'</p></button>
                                    </div>
                              </div>
                              ';
                        }
                  ?>
            </div>
      </div>

      <script>
            var hp = document.querySelector('.hp');
            var ia_hp = document.querySelector('.ia_hp');

            var p_hp = document.querySelector('.p_hp');
            var ia_hp_hp = document.querySelector('.ia_hp_hp');

            var spc = document.querySelector('.spc');
            var ia_spc = document.querySelector('.ia_spc');

            var p_atq = document.querySelector('.p_atq');
            var ia_atq_point = document.querySelector('.ia_atq_point');

            var player = {
                  player_sante : parseInt(p_hp.innerHTML, 10),
                  player_attaque : parseInt(p_atq.innerHTML, 10),
                  player_special : parseInt(spc.innerHTML, 10),
            };
            var ia = {
                  ia_sante : parseInt(ia_hp_hp.innerHTML, 10),
                  ia_attaque : parseInt(ia_atq_point.innerHTML, 10),
                  ia_special : parseInt(ia_spc.innerHTML, 10),
            };

            var atq = document.querySelector('.atq');
            var ia_atq = document.querySelector('.ia_atq');

            var special = document.querySelector('.special');
            if(special.innerHTML.includes('Tir'))
            {
                  player.player_special = player.player_attaque * 1.5;
                  spc.innerHTML = Math.round(player.player_special);
            }
            var ia_special = document.querySelector('.ia_special');

            atq.addEventListener('click', ()=>{
                  atq.disabled = true;
                  special.disabled = true;
                  var count = 0;
                  var ia_strategie = ia_choice();
                  if(ia_special.innerHTML.includes('Parer') && ia_special_attaque() == "parer")
                  {
                        console.log('Attaque parée.');
                        setTimeout(() => {
                              atq.disabled = false;
                              special.disabled = false;
                        }, 1);
                  }else
                  {const dommage_step = setInterval(()=>{
                        ia.ia_sante = ia.ia_sante - 1;
                        count++;
                        ia_hp.style.width = ia.ia_sante+"px";
                        ia_hp.innerHTML = 'LP : '+ia.ia_sante;
                        if(count == player.player_attaque)
                        {
                              if(ia_strategie == 'special')
                              {
                                    if(ia_special_attaque() == false)
                                    {
                                          console.log("La compétence a échoué.");
                                    }else{
                                          ia_special_attaque();
                                    }
                              }else{
                                    var c = 0;
                                    const ia_dommage_step = setInterval(() => {
                                          player.player_sante = player.player_sante - 1;
                                          c++;
                                          hp.style.width = player.player_sante+"px";
                                          hp.innerHTML = 'LP : '+player.player_sante;
                                          if(c == ia.ia_attaque)
                                          {
                                                clearInterval(ia_dommage_step);
                                          }
                                    }, 100);
                              }
                              atq.disabled = false;
                              special.disabled = false;
                              clearInterval(dommage_step);
                        }
                  }, 100);}

                  
            })

            function ia_choice()
            {
                  var choice = '';
                  var ia_strategie = ['attaque', 'special'];
                  if(!ia_special.innerHTML.includes('Parer'))
                  {
                        var rand = Math.floor(Math.random() * 11);
                        if(rand > 2)
                        {
                              choice = 'special';
                        }
                        else
                        {
                              choice = 'attaque';
                        }
                        console.log(choice);
                  }
                  else
                  {
                        var rand = Math.floor(Math.random() * 11);
                        if(rand > 3)
                        {
                              choice = 'attaque';
                        }
                        else
                        {
                              choice = 'special';
                        }
                        console.log(choice);
                  }
                  
                  return choice;
            }

            function ia_special_attaque()
            {
                  var rand = 0;
                  if(ia_special.innerHTML.includes('Parer'))
                  {
                        rand = Math.floor(Math.random() * 2);
                        if(rand == 1){
                              return 'parer';
                        }
                        else{
                              return false;
                        }
                  }
                  else if(ia_special.innerHTML.includes('Feu'))
                  {
                        rand = Math.floor(Math.random() * 5);
                        if(rand == 0){
                              return false;
                        }
                        else{
                              var count = 0;
                              const dommage_step = setInterval(() => {
                                    player.player_sante = player.player_sante - 1;
                                    count++;
                                    hp.style.width = player.player_sante+"px";
                                    hp.innerHTML = 'LP : '+player.player_sante;
                                    if(count == ia.ia_special)
                                    {
                                          clearInterval(dommage_step);
                                    }
                              }, 100);
                        }
                  }
                  else if(ia_special.innerHTML.includes('Tir'))
                  {
                        console.log('Tir');
                        ia.ia_special = ia.ia_attaque * 1.5;
                        var count = 0;
                        const dommage_step = setInterval(() => {
                              player.player_sante = player.player_sante - 1;
                              count++;
                              hp.style.width = player.player_sante+"px";
                              hp.innerHTML = 'LP : '+player.player_sante;
                              if(count == ia.ia_special)
                              {
                                    ia.ia_attaque = ia.ia_attaque - 2;
                                    ia_spc.innerHTML = ia.ia_special_attaque;
                                    clearInterval(dommage_step);
                              }
                        }, 100);
                  }
                  else if(ia_special.innerHTML.includes('Sacré'))
                  {
                        rand = Math.floor(Math.random() * 2);
                        if(rand == 1){
                              var count = 0;
                              const dommage_step = setInterval(() => {
                                    player.player_sante = player.player_sante - 1;
                                    count++;
                                    hp.style.width = player.player_sante+"px";
                                    hp.innerHTML = 'LP : '+player.player_sante;
                                    if(count == ia.ia_special)
                                    {
                                          ia.ia_sante = ia.ia_sante + 5;
                                          ia_hp.style.width = ia.ia_sante+"px";
                                          ia_hp.innerHTML = 'LP : '+ia.ia_sante;
                                          clearInterval(dommage_step);
                                    }
                              }, 100);
                        }
                        else{
                              return false;
                        }
                  }
                  else if(ia_special.innerHTML.includes('Naturel'))
                  {
                        var att_point = [];
                        for(let i = 0; i <= 10 ; i++){
                              att_point[i] = i + 5;
                        }

                        ia.ia_special = att_point[Math.floor(Math.random() * 11)];
                        var count = 0;
                        const dommage_step = setInterval(() => {
                              player.player_sante = player.player_sante - 1;
                              count++;
                              hp.style.width = player.player_sante+"px";
                              hp.innerHTML = 'LP : '+player.player_sante;
                              if(count == ia.ia_special)
                              {
                                    clearInterval(dommage_step);
                              }
                        }, 100);

                        rand = Math.floor(Math.random() * 4);
                        if(rand == 0){
                              ia.ia_sante = ia.ia_sante + ia.ia_special;
                              ia_hp.style.width = ia.ia_sante+"px";
                              ia_hp.innerHTML = 'LP : '+ia.ia_sante;
                        }
                        else{
                              return false;
                        }
                  }
            }

      </script>
</body>