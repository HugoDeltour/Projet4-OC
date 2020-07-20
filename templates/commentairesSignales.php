<?php
  $this->title="Commentaires signalés";
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
<div id="commentairesSignales">
  <?php
    foreach ($reqComSignal as $donnees) {
      ?>
      <p><?= $donnees->getComment();?></p>
      <a href="../public/index.php?route=supprimerCommentaire&comID=<?=$donnees->getId();?>">Supprimer</a>
      <a href="../public/index.php?route=nonSignalCommentaire&comID=<?=$donnees->getId();?>">Enlever le signalement</a>
      <?php
    }
  ?>
</div>
