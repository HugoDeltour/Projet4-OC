<?php

namespace App\src\controller;
use App\src\DAO\chapitreDAO;
use App\src\DAO\commentDAO;
use App\src\model\view;
use App\config\parametre;

class frontController extends Controller{

  public function home(){
    $req = $this->chapitreDAO->getChapitres();
    $reqChap=$this->chapitreDAO->getChapitres();
    return $this->view->rendu('affichageAccueil',[
      'req'=>$req,
      'reqChap'=>$reqChap
    ]);
  }

  public function chapSeul($idChapitre){
    $reqChap = $this->chapitreDAO->getChapitres();
    $req=$this->chapitreDAO->getChapitre($idChapitre);
    $comments = $this->commentDAO->getCommentsFromArticle($idChapitre);
    return $this->view->rendu('chapitreSeul',[
      'req'=>$req,
      'reqChap'=>$reqChap,
      'comments'=>$comments
    ]);
  }

  public function auteur(){
    $reqChap = $this->chapitreDAO->getChapitres();
    return $this->view->rendu('auteur',[
      'reqChap'=>$reqChap
    ]);
  }

  public function ajoutCommentaire(parametre $post,$chapID){
    if($post->get('submit')){
      $errors=$this->validation->validate($post,'commentaire');
      if(!$errors){
        $this->commentDAO->ajoutCommentaire($post,$chapID);
        $this->session->set('ajout_commentaire','Le commentaire a été ajouté');
        header('Location:../public/index.php?route=chapitre&chapID='.$chapID);
      }
      $reqChap = $this->chapitreDAO->getChapitres();
      $req=$this->chapitreDAO->getChapitre($chapID);
      $comments = $this->commentDAO->getCommentsFromArticle($chapID);
      return $this->view->rendu('chapitreSeul',[
        'req'=>$req,
        'reqChap'=>$reqChap,
        'comments'=>$comments,
        'post'=>$post,
        'errors'=>$errors
      ]);
    }
  }

  public function signalerCommentaire($commentID){
    $this->commentDAO->signalerCommentaire($commentID);
    $this->session->set('signaler_commentaire','Le commentaire a été signalé');
    header('Location:../public/index.php');
  }

  public function inscription(parametre $post){
    if($post->get('submit')){
      $errors=$this->validation->validate($post,'inscription');
      if($this->utilisateurDAO->checkUtilisateur($post)){
        $errors['pseudo']=$this->utilisateurDAO->checkUtilisateur($post);
      }
      if(!$errors){
        $this->utilisateurDAO->inscription($post);
        $this->session->set('inscription','Vous êtes inscrit !');
        header('Location:../public/index.php');
      }
      $reqChap = $this->chapitreDAO->getChapitres();
      return $this->view->rendu('inscription',[
        'reqChap'=>$reqChap,
        'post'=>$post,
        'errors'=>$errors
      ]);
    }
    $reqChap = $this->chapitreDAO->getChapitres();
    return $this->view->rendu('inscription',[
      'reqChap'=>$reqChap
    ]);
  }

  public function connexion(parametre $post){
    $reqChap = $this->chapitreDAO->getChapitres();
    if($post->get('submit')){
      $result=$this->utilisateurDAO->connexion($post);
      if($result && $result['isPasswordOK']){
        $this->session->set('connexion','Bienvenue');
        $this->session->set('id',$result['result']['id']);
        $this->session->set('role',$result['result']['Nom_Role']);
        $this->session->set('pseudo',$post->get('pseudo'));
        header('Location:../public/index.php');
      }
      else {
        $this->session->set('error_connexion','Le pseudo et/ou le mot de passe sont incorrects');
        return $this->view->rendu('connexion',[
          'post'=>$post,
          'reqChap'=>$reqChap
        ]);
      }
    }

    return $this->view->rendu('connexion',[
      'reqChap'=>$reqChap
    ]);
  }

}

?>
