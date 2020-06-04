<?php

namespace App\src\controller;
use App\src\DAO\chapitreDAO;

class frontController{

  private $chapitreDAO;

  public function __construct(){
    $this->chapitreDAO = new chapitreDAO();
  }

  public function home(){
    $req = $this->chapitreDAO->getChapitres();
    $reqChap=$this->chapitreDAO->getChapitres();
    require '../templates/affichageAccueil.php';
  }

  public function chapSeul(){
    $reqChap = $this->chapitreDAO->getChapitres();
    $req=$this->chapitreDAO->getChapitre($_GET['chapID']);
    require '../templates/chapitreSeul.php';
  }

  public function register(){
    $reqChap = $this->chapitreDAO->getChapitres();
    require '../templates/inscription.php';
  }

}

?>
