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

  public function connexion(parametre $post){
    $sql = 'SELECT ID_user,Password FROM user WHERE pseudo =?';
    var_dump($post);
    $data=$this->createQuery($sql,[$post->get('pseudo')]);
    $result=$data->fetch();
    var_dump($result);
    $isPasswordOK = password_verify($post->get('password'),password_hash($result['Password'],PASSWORD_BCRYPT));
    var_dump($isPasswordOK);
    return ['result'=>$result,'isPasswordOK'=>$isPasswordOK];
  }

}

?>
