<?php

namespace App\src\controller;

use App\config\parametre;

class backController extends Controller{

  public function ajoutChapitre(parametre $post){
    $reqChap = $this->chapitreDAO->getChapitres();
    if($post->get('submit')){
      $errors = $this->validation->validate($post,'chapitre');
      if(!$errors){
        $this->chapitreDAO->ajoutChapitre($post);
        $this->session->set('ajout_chapitre','Le nouveau chapitre a été ajouté !');
        header('Location: ../public/index.php');
      }
      return $this->view->rendu('ajout_chapitre',[
        'post'=>$post,
        'reqChap'=>$reqChap,
        'errors'=>$errors
      ]);
    }
    return $this->view->rendu('ajout_chapitre',[
      'post'=>$post,
      'reqChap'=>$reqChap
    ]);
  }

  public function modifChapitre(parametre $post, $chapID){
    $chapitre = $this->chapitreDAO->getChapitre($chapID);
    $reqChap = $this->chapitreDAO->getChapitres();
    if($post->get('submit')){
      $errors = $this->validation->validate($post,'chapitre');
      if(!$errors){
        $this->chapitreDAO->modifChapitre($post,$chapID);
        $this->session->set('modif_chapitre','Le chapitre a été modifié !');
        header('Location: ../public/index.php');
      }
      return $this->view->rendu('modif_chapitre',[
        'chapitre'=>$chapitre,
        'reqChap'=>$reqChap,
        'errors'=> $errors,
        'post'=>$post
      ]);
    }

    $post->set('ID_Chapitre',$chapitre->getId());
    $post->set('Titre_Chapitre',$chapitre->getTitle());
    $post->set('Text_Chapitre',$chapitre->getText());
    $post->set('Ecrivain',$chapitre->getAuthor());

    return $this->view->rendu('modif_chapitre',[
      'chapitre'=>$chapitre,
      'reqChap'=>$reqChap,
      'post'=>$post
    ]);
  }

  public function supprimerChapitre($chapID){
    $this->chapitreDAO->supprimerChapitre($chapID);
    $this->session->set('supprimer_chapitre','Le chapitre a été supprimé');
    header('Location:../public/index.php');
  }

  public function deconnexion(){
    $this->session->arret();
    $this->session->depart();
    $this->session->set('deconnexion','Au revoir');
    header('Location:../public/index.php');
  }

  public function administration(){
    $reqChap = $this->chapitreDAO->getChapitres();
    return $this->view->rendu('administration',[
      'reqChap'=>$reqChap
    ]);
  }

  public function supprimerCommentaire($comID){
    $this->commentDAO->supprimerCommentaire($comID);
    $this->session->set('supprimer_commentaire','Le commentaire a été supprimé');
    header('Location:../public/index.php');
  }

  public function nonSignalCommentaire($comID){
    $this->commentDAO->nonSignalCommentaire($comID);
    $this->session->set('signalCommentaire','Le commentaire a été enlever des commentaires signalés');
    header('Location:../public/index.php');
  }

}
?>
