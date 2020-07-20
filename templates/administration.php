<?php $this->title="Administration" ?>

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
<div id="administration">
  <a href="./index.php?route=ajoutChapitre">Ajout chapitre</a></br>
  <a href="./index.php?route=commentairesSignales">Commentaires signalés</a></br>
  <a href="./index.php?route=utilisateurSite">Utilisateur</a></br>
</diV>
