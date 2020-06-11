<?php

namespace App\src\controller;
use App\src\DAO\chapitreDAO;
use App\src\DAO\commentDAO;
use App\src\model\view;

class frontController{

  private $chapitreDAO;
  private $commentDAO;
  private $view;

  public function __construct(){
    $this->chapitreDAO = new chapitreDAO();
    $this->commentDAO = new commentDAO();
    $this->view = new view();
  }

  public function home(){
    $req = $this->chapitreDAO->getChapitres();
    $reqChap=$this->chapitreDAO->getChapitres();
    return $this->view->rendu('affichageAccueil',[
      'req'=>$req,
      'reqChap'=>$reqChap
    ]);
  }

  public function chapSeul(){
    $reqChap = $this->chapitreDAO->getChapitres();
    $req=$this->chapitreDAO->getChapitre($_GET['chapID']);
    $comments = $this->commentDAO->getCommentsFromArticle($_GET['chapID']);
    return $this->view->rendu('chapitreSeul',[
      'req'=>$req,
      'reqChap'=>$reqChap,
      'comments'=>$comments
    ]);
  }

  public function register(){
    $reqChap = $this->chapitreDAO->getChapitres();
    return $this->view->rendu('inscription',[
      'reqChap'=>$reqChap
    ]);
  }

  public function auteur(){
    $reqChap = $this->chapitreDAO->getChapitres();
    return $this->view->rendu('auteur',[
      'reqChap'=>$reqChap
    ]);
  }

  public function administration(){
    $reqChap = $this->chapitreDAO->getChapitres();
    return $this->view->rendu('administration',[
      'reqChap'=>$reqChap
    ]);
  }

}

?>
