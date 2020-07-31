<?php $this->title="Chapitre" ?>

<?php
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
  <div id="element-central">
    <div id="Chapitre">
        <h1><?=htmlspecialchars($req->getTitle());?></h1>
        <?=$req->getText();?>
        </br>
        <?=htmlspecialchars($req->getAuthor());?>
        </br>
    </div>
    </br>
    <div class="administration">
      <?php if($this->session->get('role')==='admin'){
        ?>
        <a href="../index.php?route=supprimerChapitre&chapID=<?=$req->getId();?>">Supprimer</a>
        <a href="../index.php?route=modifChapitre&chapID=<?=$req->getId();?>">Modifier</a>
        <?php
      }
      ?>
    </div>
    <div id="ajoutCommentaire">
      <h3>Ajouter un commentaire</h3>
      <?php include('base_form_commentaire.php');?>
      <h3>Commentaires</h3>
      <?php
              foreach($comments as $comment)
              {?>
                <div id="Commentaire">
                  <p><?= htmlspecialchars($comment->getPseudo());?></p>
                  <p><?= $comment->getComment();?></p>
                  <p><?= htmlspecialchars($comment->getDate());?></p>
                  <?php
                  if($comment->isSignal()){
                    ?>
                    <p>Commentaire déjà signaler</p>
                    <?php
                  }else{
                    ?>
                    <p><a href="../index.php?route=signalerCommentaire&commentaireID=<?= $comment->getId(); ?>">Signaler</a></p>
                    <?php
                  }
                  ?>
                </div>
                </br>
                <?php
              }
          ?>
    </div>
  </div>
</div>
