<?php $this->title="Administration" ?>

<?php
require('menu.php');
?>
<div id="MP-chap">
  <div id="list-chap">
      <h1>Chapitre</h1>
      <?php
          foreach($reqChap as $donnees){
              ?>
              <a href="./index.php?route=chapitre&chapID=<?=htmlspecialchars($donnees->getId());?>"><?php echo $donnees->getTitle();?></a></br><?php
          };
      ?>
  </div></br>

  <div id="espace-administration">
    <h1>Administration</h1>
    <div id="lien-admin">
      <a href="./index.php?route=ajoutChapitre">Ajout chapitre</a></br>
      <a href="./index.php?route=commentairesSignales">Commentaires signalés</a></br>
    </div>
  </diV>
</div>
