<?php
  $this->title = "Modification du chapitre";
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
<div id="modifChap">
  <h1>Modification</h1>
  <?php include('base_form_chapitre.php');?>
</div>
</div>
