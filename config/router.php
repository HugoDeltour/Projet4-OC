<?php
namespace App\config;
use App\src\controller\frontController;
use Exception;

class router{

  private $frontController;

  public function __construct(){
    $this->frontController=new frontController();
  }

  public function run(){

    try{
      if(isset($_GET['route'])){
        if($_GET['route']==='chapitre'){
          $this->frontController->chapSeul();
        }
        elseif ($_GET['route']==='register') {
          $this->frontController->register();
        }
        else{
          echo '404 - page not found';
        }
      }
      else{
        $this->frontController->home();
      }
    }
    catch(Exception $e){
      echo 'Erreur';
    }
  }
}

?>
