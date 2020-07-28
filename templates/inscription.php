<?php
  $this->title="Inscription";
  require('menu.php');
?>
<div id="MP-chap">
  <div id="list-chap">
      <h1>Chapitre</h1>
      <?php
          foreach($reqChap as $donnees){
              ?>
              <a href="../index.php?route=chapitre&chapID=<?=htmlspecialchars($donnees->getId());?>"><?php echo $donnees->getTitle();?></a></br><?php
          };
      ?>
  </div></br>
  <div id="formInscription">
    <h1>Inscription</h1>
    <form action="./index.php?route=inscription" method="post">
      <label for="pseudo">Pseudo</label>
      <input type="text" id="pseudo" name="pseudo" value="<?= isset($post)?htmlspecialchars($post->get('pseudo')):''?>"></br>
      <?= isset($errors['pseudo']) ? $errors['pseudo']:'';?>
      <label for="password">Mot de passe</label>
      <input type="password" id="password" name="password"></br>
      <?= isset($errors['password']) ? $errors['password']:'';?>
      <input type="submit" value="Inscription" id="submit" name="submit"></br>
    </form>
  </div>
</div>
