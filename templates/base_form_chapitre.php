<?php
$route = isset($post) && $post->get('id_chapitre') ? 'modifChapitre&chapID='.$post->get('id_chapitre') : 'ajoutChapitre';
$submit = $route === 'ajoutChapitre' ? 'Envoyer' : 'Mettre à jour';
?>

<form method="post" action="../index.php?route=<?=$route;?>">
  <label for="titre_chapitre">Titre</label></br>
  <input type="text" id="titre_chapitre" name="titre_chapitre" value="<?= isset($post) ? htmlspecialchars($post->get('titre_chapitre')):"";?>"></br>
  <?=isset($errors['titre_chapitre'])?$errors['titre_chapitre']:'';?>
  <label for="text_chapitre">Contenu</label></br>
  <textarea id="text_chapitre" name="text_chapitre"><?= isset($post) ? htmlspecialchars($post->get('text_chapitre')):""; ?></textarea></br>
  <?=isset($errors['text_chapitre'])?$errors['text_chapitre']:'';?>
  <label for="auteur">Auteur</label></br>
  <input type="text" id="auteur" name="auteur" value="<?= isset($post) ? htmlspecialchars($post->get('auteur')):""; ?>"></br>
  <?=isset($errors['auteur'])?$errors['auteur']:'';?>
  <input type="submit" value="<?= $submit;?>" id="submit" name="submit">
</form>
