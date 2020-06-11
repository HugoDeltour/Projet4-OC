<?php

namespace App\src\model;

class view{

  private $file;
  private $title;

  public function rendu($template, $data=[]){
    $this->file='../templates/'.$template.'.php';
    $content = $this->renduFichier($this->file, $data);
    $view = $this->renduFichier('../templates/base.php',[
      'title'=>$this->title,
      'content'=>$content
    ]);
    echo $view;
  }

  private function renduFichier($file, $data){
    if(file_exists($file)){
      extract($data);
      ob_start();
      require $file;
      return ob_get_clean();
    }
    header('Loccation: index.php?route=notFound');
  }

}

?>
