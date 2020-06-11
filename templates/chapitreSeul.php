<?php $this->title="Chapitre" ?>

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
<div id="Chapitre">
    <?php
            ?><h2><?php echo $req->getTitle();?></h2>
            <?php
            echo $req->getText();?>
            </br>
            <?php
            echo $req->getAuthor();?>
            </br>
            <?php
    ?>
</div>
</br>
<div id="commentaire">
  <?php
          foreach($comments as $comment)
          {
            echo $comment->getPseudo();
            ?>
            </br>
            <?php
            echo $comment->getComment();?>
            </br>
            <?php
            echo $comment->getDate();?>
            </br>
            <?php
          }
      ?>
</div>
