<?php

namespace App\src\controller;

class errorController extends Controller{

  public function errorNotFound(){
    require '../templates/error404.php';
  }

  public function errorServer(){
    require '../templates/error500.php';
  }

}

?>
