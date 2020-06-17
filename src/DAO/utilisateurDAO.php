<?php

namespace App\src\DAO;

use App\config\parametre;

class utilisateurDAO extends DAO{

  public function inscription(parametre $post){
    $this->checkUtilisateur($post);
    $sql = 'INSERT INTO user (Pseudo,Password) VALUES (?,?)';
    $this->createQuery($sql,[$post->get('pseudo'),password_hash($post->get('password'),PASSWORD_BCRYPT)]);
  }

  public function checkUtilisateur(parametre $post){
    $sql = 'SELECT COUNT(pseudo) FROM user WHERE pseudo=?';
    $result = $this->createQuery($sql,[$post->get('pseudo')]);
    $isUnique=$result->fetchColumn();
    if($isUnique){
      return '<p>Pseudo déjà existant</p>';
    }
  }

}

?>
