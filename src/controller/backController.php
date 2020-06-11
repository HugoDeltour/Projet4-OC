<?php

namespace App\src\controller;
use App\src\DAO\chapitreDAO;
use App\src\model\view;

class backController extends Controller{

  public function ajoutChapitre(parametre $post){
    if($post->get('submit')){
      $this->chapitreDAO->ajoutChapitre($post);
      header('Location: ../public/index.php');
    }
    $reqChap = $this->chapitreDAO->getChapitres();
    return $this->view->rendu('ajout_chapitre',[
      'post'=>$post,
      'reqChap'=>$reqChap
    ]);
  }

}
?>
