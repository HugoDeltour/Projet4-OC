
<?php

$route = isset($chapitre) && $chapitre->getId() ? 'modifChapitre&chapID='.$chapitre->getId() : 'ajoutChapitre';
$title = isset($chapitre) && $chapitre->getTitle() ? htmlspecialchars($chapitre->getTitle()) : "";
$content = isset($chapitre) && $chapitre->getText() ? htmlspecialchars($chapitre->getText()) : "";
$author = isset($chapitre) && $chapitre->getAuthor() ? htmlspecialchars($chapitre->getAuthor()) : "";
$submit = $route === 'ajoutChapitre' ? 'Envoyer' : 'Mettre à jour';

?>


<form method="post" action="../public/index.php?route=<?=$route;?>">
  <label for="title">Titre</label></br>
  <input type="text" id="title" name="title" value="<?=$title;?>"></br>
  <label for="content">Contenu</label></br>
  <textarea id="content" name="content"><?= $content; ?></textarea><br>
  <label for="author">Auteur</label><br>
  <input type="text" id="author" name="author" value="<?= $author; ?>"><br>
  <input type="submit" value="<?= $submit;?>" id="submit" name="submit">
</form>
