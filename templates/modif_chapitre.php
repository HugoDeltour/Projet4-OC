<?php
  $this->title = "Modification du chapitre";
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
<div>
  <?php include('base_form_chapitre.php');?>
</div>
