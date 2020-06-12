<?php $this->title="Accueil";?>
<?php
  require('menu.php');
?>
<?= $this->session->display('ajout_chapitre')?>
<?= $this->session->display('modif_chapitre')?>
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
<div id="Chapitre">
    <?php
        foreach($req as $donnees){
            ?>
            <h1><a href="../public/index.php?route=chapitre&chapID=<?=htmlspecialchars($donnees->getId());?>"><?php echo $donnees->getTitle();?></a></h1>
            </br>
            <?php
            echo $donnees->getText();?>
            </br>
            <?php
            echo $donnees->getAuthor();?>
            </br>
            <?php
        };
    ?>
</div>
