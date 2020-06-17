<?php

namespace App\src\contrainte;

class validation{

  public function validate($data,$name){
    if($name === 'chapitre'){
      $validationChapitre = new validationChapitre();
      $errors = $validationChapitre->check($data);
      return $errors;
    }
    elseif ($name==='commentaire') {
      $validationCommentaire = new validationCommentaire();
      $errors = $validationCommentaire->check($data);
      return $errors;
    }
    elseif ($name==='utilisateur') {
      $validationUtilisateur = new validationUtilisateur();
      $errors = $validationUtilisateur->check($data);
      return $errors;
    }
  }

}

?>
