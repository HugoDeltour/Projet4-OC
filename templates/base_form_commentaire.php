<?php
$route=isset($post) && $post->get('ID_Commentaire') ? 'modifCommentaire':'ajoutCommentaire';
$submit=$route==='ajoutCommentaire'?'Ajouter':'Mettre à jour';
?>

<form method="post" action="../public/index.php?route=<?=$route;?>&chapID=<?=htmlspecialchars($req->getId());?>">
  <label for="pseudo">Pseudo:</label>
  <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ?htmlspecialchars($post->get('pseudo')):"" ?>"></br>
  <?=isset($errors['pseudo'])?$errors['pseudo']:'';?>
  <label for="commentaire">Commentaire:</label></br>
  <textarea id="commentaire" name="commentaire" value="<?= isset($post) ?htmlspecialchars($post->get('commentaire')):"" ?>"></textarea></br>
  <?=isset($errors['commentaire'])?$errors['commentaire']:'';?>
  <input type="submit" value="<?=$submit;?>" id="submit" name="submit">
</form>
