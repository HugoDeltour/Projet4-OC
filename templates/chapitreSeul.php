<?php $this->title="Chapitre" ?>

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
<div id="Chapitre">
    <h2><?=htmlspecialchars($req->getTitle());?></h2>
    <p><?=htmlspecialchars($req->getText());?>
    </br>
    <p><?=htmlspecialchars($req->getAuthor());?>
    </br>
</div>
</br>
<div class="administration">
  <a href="../public/index.php?route=modifChapitre&chapID=<?=$req->getId();?>">Modifier</a>
  <a href="../public/index.php?route=supprimerChapitre&chapID=<?=$req->getId();?>">Supprimer</a>
</div>
<div id="commentaire">
  <h3>Ajouter un commentaire</h3>
  <?php include('base_form_commentaire.php');?>
  <h3>Commentaires</h3>
  <?php
          foreach($comments as $comment)
          {?>
            <p><?= htmlspecialchars($comment->getPseudo());?></p>
            <p><?= htmlspecialchars($comment->getComment());?></p>
            <p><?= htmlspecialchars($comment->getDate());?></p>
            <?php
            if($comment->isSignal()){
              ?>
              <p>Commentaire déjà signaler</p>
              <?php
            }else{
              ?>
              <p><a href="../public/index.php?route=signalerCommentaire&commentaireID=<?= $comment->getId(); ?>">Signaler</a></p>
              <?php
            }
            ?>
            </br>
            <?php
          }
      ?>
</div>
