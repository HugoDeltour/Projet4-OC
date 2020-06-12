<?php
  $this->title = "Modification du chapitre";
  require('menu.php');
?>
<div>
  <form method="post" action="../public/index.php?route=modifChapitre&chapID=<?=htmlspecialchars($chapitre->getId());?>">
    <label for="title">Titre</label></br>
    <input type="text" id="title" name="title" value="<?=htmlspecialchars($chapitre->getTitle())?>"></br>
    <label for="content">Contenu</label></br>
    <textarea id="content" name="content"><?= htmlspecialchars($chapitre->getText()); ?></textarea><br>
    <label for="author">Auteur</label><br>
    <input type="text" id="author" name="author" value="<?= htmlspecialchars($chapitre->getAuthor()); ?>"><br>
    <input type="submit" value="Mettre à jour" id="submit" name="submit">
  </form>
