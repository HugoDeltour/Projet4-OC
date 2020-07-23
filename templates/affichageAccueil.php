<?php $this->title="Accueil";?>
<?php
  require('menu.php');
?>
<?= $this->session->display('ajout_chapitre');?>
<?= $this->session->display('modif_chapitre');?>
<?= $this->session->display('supprimer_chapitre');?>
<?= $this->session->display('ajout_commentaire');?>
<?= $this->session->display('signaler_commentaire');?>
<?= $this->session->display('inscription');?>
<?= $this->session->display('connexion');?>
<?= $this->session->display('deconnexion');?>
<?= $this->session->display('supprimer_commentaire');?>
<?= $this->session->display('signalCommentaire')?>
<div id="MP-chap">
  <div id="list-chap">
      <h1>Chapitre</h1>
      <?php
          foreach($reqChap as $donnees){
              ?>
              <a href="../public/index.php?route=chapitre&chapID=<?=htmlspecialchars($donnees->getId());?>"><?php echo $donnees->getTitle();?></a></br><?php
          };
      ?>
  </div></br>
  <div id="chapitre">
      <?php
          foreach($req as $donnees){
              ?>
              <h1><a href="../public/index.php?route=chapitre&chapID=<?=htmlspecialchars($donnees->getId());?>"><?php echo $donnees->getTitle();?></a></h1>
              </br>
              <p><?=$donnees->getText();?></p>
              </br>
              <p><?=htmlspecialchars($donnees->getAuthor());?></p>
              </br>
              <?php
          };
      ?>
  </div>
</div>
