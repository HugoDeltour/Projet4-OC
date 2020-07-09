<?php

namespace App\src\contrainte;
use App\config\parametre;

/**
 * class validationChapitre
 * @packages App\config\parametre
 * class permettant la validation de certaine contrainte concernant l'ajout de chapitre
 */
class validationChapitre extends validation{

  private $errors = [];
  private $contrainte;

  public function __construct(){
    $this->contrainte = new contrainte();
  }

  public function check(parametre $post){
    foreach ($post->all() as $key => $value) {
      $this->checkChamps($key,$value);
    }
    return $this->errors;
  }

  private function checkChamps($name,$value){
    if($name==='Titre_Chapitre'){
      $error=$this->checkTitre($name,$value);
      $this->addError($name,$error);
    }
    elseif ($name==='Text_Chapitre') {
      $error=$this->checkText($name,$value);
      $this->addError($name,$error);
    }
    elseif ($name==='Ecrivain') {
      $error=$this->checkAuteur($name,$value);
      $this->addError($name,$error);
    }
  }

  private function addError($name,$error){
    if($error){
      $this->errors+=[$name=>$error];
    }
  }

  private function checkTitre($name,$value){
    if($this->contrainte->nonVide($name,$value)){
      return $this->contrainte->nonVide('titre',$value);
    }
    if($this->contrainte->longMin($name,$value,2)){
      return $this->contrainte->longMin('titre',$value,2);
    }
    if($this->contrainte->longMax($name,$value,255)){
      return $this->contrainte->longMax('titre',$value,255);
    }
  }

  private function checkText($name,$value){
    if($this->contrainte->nonVide($name,$value)){
      return $this->contrainte->nonVide('text',$value);
    }
    if($this->contrainte->longMin($name,$value,10)){
      return $this->contrainte->longMin('text',$value,10);
    }
  }

  private function checkAuteur($name,$value){
    if($this->contrainte->nonVide($name,$value)){
      return $this->contrainte->nonVide('auteur',$value);
    }
    if($this->contrainte->longMin($name,$value,2)){
      return $this->contrainte->longMin('auteur',$value,2);
    }
    if($this->contrainte->longMax($name,$value,255)){
      return $this->contrainte->longMax('auteur',$value,255);
    }
  }

}

?>
