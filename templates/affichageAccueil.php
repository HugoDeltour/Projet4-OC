<?php $this->title="Accueil";?>
<?php
  require('menu.php');
?>
<div id="MP-chap">
  <div id="notification">
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
  </div>
  <div id="list-chap">
      <h1>Chapitre</h1>
      <?php
          foreach($reqChap as $donnees){
              ?>
              <a href="../index.php?route=chapitre&chapID=<?=htmlspecialchars($donnees->getId());?>"><?php echo $donnees->getTitle();?></a></br><?php
          };
      ?>
  </div>
  <div id="chapitre">
      <?php
          foreach($req as $donnees){
              ?>
              <Div id="chap_seul">
                <h1><a href="../index.php?route=chapitre&chapID=<?=htmlspecialchars($donnees->getId());?>"><?php echo $donnees->getTitle();?></a></h1>
                <p><?=$donnees->getText();?></p>
                <p><?=htmlspecialchars($donnees->getAuthor());?></p>
              </div></br>
              <?php
          };
      ?>
  </div>
</div>
