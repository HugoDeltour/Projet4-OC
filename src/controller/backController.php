<?php

namespace App\src\controller;
use App\src\DAO\chapitreDAO;
use App\src\model\view;

class backController{

  private $view;
  private $chapitreDAO;

  public function __construct(){
    $this->view = new view();
    $this->chapitreDAO = new chapitreDAO();
  }

  public function ajoutChapitre($post){
    if(isset($post['submit'])){
      $chapitreDAO = new chapitreDAO();
      $chapitreDAO->ajoutChapitre($post);
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
