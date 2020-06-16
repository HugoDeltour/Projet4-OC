<?php

namespace App\src\contrainte;

class validation{

  public function validate($data,$name){
    if($name === 'chapitre'){
      $validationChapitre = new validationChapitre();
      $errors = $validationChapitre->check($data);
      return $errors;
    }
  }

}

?>
