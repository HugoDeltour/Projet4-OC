<?php

namespace App\src\controller;

use App\config\parametre;

class backController extends Controller{

  public function ajoutChapitre(parametre $post){
    if($post->get('submit')){
      $this->chapitreDAO->ajoutChapitre($post);
      $this->session->set('ajout_chapitre','Le nouveau chapitre a été ajouté !');
      header('Location: ../public/index.php');
    }
    $reqChap = $this->chapitreDAO->getChapitres();
    return $this->view->rendu('ajout_chapitre',[
      'post'=>$post,
      'reqChap'=>$reqChap
    ]);
  }

  public function modifChapitre(parametre $post, $chapID){
    $chapitre = $this->chapitreDAO->getChapitre($chapID);
    if($post->get('submit')){
      $this->chapitreDAO->modifChapitre($post,$chapID);
      $this->session->set('modif_chapitre','Le chapitre a été modifié !');
      header('Location: ../public/index.php');
    }
    return $this->view->rendu('modif_chapitre',[
      'chapitre'=>$chapitre
    ]);
  }

}
?>
