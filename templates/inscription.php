<?php $this->title="Inscription"?>
<?php
  require('menu.php');
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
<div id="formInscription">
  <form action="../public/index.php?route=inscription" method="post">
    <label for="pseudo">Pseudo</label>
    <input type="text" id="pseudo" name="pseudo" value="<?= isset($post)?htmlspecialchars($post->get('pseudo')):''?>"></br>
    <?= isset($errors['pseudo']) ? $errors['pseudo']:'';?>
    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password"></br>
    <?= isset($errors['password']) ? $errors['password']:'';?>
    <input type="submit" value="Inscription" id="submit" name="submit"></br>
  </form>
</div>
