<?php $this->title="Inscription"?>
<?php
  require('menu.php');
?>
<div id="list-chap">
    <h1>Chapitre</h1>
    <?php
        foreach($reqChap as $donnees){
            echo $donnees->getId();
            ?>
            <a href="../public/index.php?route=chapitre&chapID=<?=htmlspecialchars($donnees->getId());?>"><?php echo $donnees->getTitle();?></a></br><?php
        };
    ?>
</div></br>
<div id="formInscription">
  <form action="../public/index.php?route=register" method="post">
    <label for="pseudo">Pseudo</label>
    <input type="text" id="pseudo" name="pseudo"></br>
    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password"></br>
    <input type="submit" value="Inscription" id="submit" name="submit"></br>
  </form>
</div>
