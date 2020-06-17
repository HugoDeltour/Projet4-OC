<?php
  $this->title="Connexion";
  require('menu.php');
  $this->session->display('error_connexion');
?>
<div id="list-chap">
    <h1>Chapitre</h1>
    <?php
        foreach($reqChap as $donnees){
            ?>
            <a href="../public/index.php?route=chapitre&chapID=<?=htmlspecialchars($donnees->getId());?>"><?php echo $donnees->getTitle();?></a></br><?php
        };
    ?>
</div></br>
<div id="formConnexion">
  <form action="../public/index.php?route=connexion" method="post">
    <label for="pseudo">Pseudo</label>
    <input type="text" id="pseudo" name="pseudo" value="<?= isset($post)?htmlspecialchars($post->get('pseudo')):''?>"></br>
    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password"></br>
    <input type="submit" value="Connexion" id="submit" name="submit"></br>
  </form>
</div>
