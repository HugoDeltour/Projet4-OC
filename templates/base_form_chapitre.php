<?php
$route = isset($post) && $post->get('ID_Chapitre') ? 'modifChapitre&chapID='.$post->get('ID_Chapitre') : 'ajoutChapitre';
$submit = $route === 'ajoutChapitre' ? 'Envoyer' : 'Mettre à jour';
?>

<form method="post" action="../public/index.php?route=<?=$route;?>">
  <label for="Titre_Chapitre">Titre</label></br>
  <input type="text" id="Titre_Chapitre" name="Titre_Chapitre" value="<?= isset($post) ? htmlspecialchars($post->get('Titre_Chapitre')):"";?>"></br>
  <?=isset($errors['Titre_Chapitre'])?$errors['Titre_Chapitre']:'';?>
  <label for="Text_Chapitre">Contenu</label></br>
  <textarea id="Text_Chapitre" name="Text_Chapitre"><?= isset($post) ? htmlspecialchars($post->get('Text_Chapitre')):""; ?></textarea></br>
  <?=isset($errors['Text_Chapitre'])?$errors['Text_Chapitre']:'';?>
  <label for="Ecrivain">Auteur</label></br>
  <input type="text" id="Ecrivain" name="Ecrivain" value="<?= isset($post) ? htmlspecialchars($post->get('Ecrivain')):""; ?>"></br>
  <?=isset($errors['Ecrivain'])?$errors['Ecrivain']:'';?>
  <input type="submit" value="<?= $submit;?>" id="submit" name="submit">
</form>
