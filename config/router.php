<?php
namespace App\config;
use App\src\controller\frontController;
use App\src\controller\errorController;
use App\src\controller\backController;
use Exception;

class router{

  private $frontController;
  private $backController;
  private $errorController;
  private $request;

  public function __construct(){
    $this->request= new request();
    $this->frontController = new frontController();
    $this->backController = new backController();
    $this->errorController = new errorController();
  }

  public function run(){
    $route = $this->request->getGet()->get('route');
    try{
      if(isset($route)){
        if($route==='chapitre'){
          $this->frontController->chapSeul($this->request->getGet()->get('chapID'));
        }
        elseif ($route==='administration') {
          $this->backController->administration();
        }
        elseif ($route==='ajoutChapitre') {
          $this->backController->ajoutChapitre($this->request->getPost());
        }
        elseif ($route==='modifChapitre') {
          $this->backController->modifChapitre($this->request->getPost(),$this->request->getGet()->get('chapID'));
        }
        elseif ($route==='auteur') {
          $this->frontController->auteur();
        }
        elseif ($route==='supprimerChapitre') {
          $this->backController->supprimerChapitre($this->request->getGet()->get('chapID'));
        }
        elseif ($route==='ajoutCommentaire') {
          $this->frontController->ajoutCommentaire($this->request->getPost(),$this->request->getGet()->get('chapID'));
        }
        elseif ($route==='signalerCommentaire') {
          $this->frontController->signalerCommentaire($this->request->getGet()->get('commentaireID'));
        }
        elseif ($route==='inscription') {
          $this->frontController->inscription($this->request->getPost());
        }
        elseif ($route==='connexion') {
          $this->frontController->connexion($this->request->getPost());
        }
        elseif ($route==='deconnexion') {
          $this->backController->deconnexion();
        }
        elseif ($route==='commentairesSignales') {
          $this->frontController->commentairesSignales();
        }
        elseif ($route==='supprimerCommentaire') {
          $this->backController->supprimerCommentaire($this->request->getGet()->get('comID'));
        }
        elseif ($route==='nonSignalCommentaire') {
          $this->backController->nonSignalCommentaire($this->request->getGet()->get('comID'));
        }
        else{
          $this->errorController->errorNotFound();
        }
      }
      else{
        $this->frontController->home();
      }
    }
    catch(Exception $e){
      var_dump("".$e->getMessage());
      var_dump($this->request->getPost());
      $this->errorController->errorServer();
    }
  }
}

?>
