<?php

namespace App\src\DAO;

use App\config\parametre;

class utilisateurDAO extends DAO{

  public function inscription(parametre $post){
    $this->checkUtilisateur($post);
    $sql = 'INSERT INTO user (Pseudo,Password,role_id) VALUES (?,?,?)';
    $this->createQuery($sql,[$post->get('pseudo'),password_hash($post->get('password'),PASSWORD_BCRYPT)],2);
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
    $sql = 'SELECT user.ID_user,user.Password,role.Nom_Role FROM user INNER JOIN role ON role.ID_Role= user.role_id WHERE pseudo =?';
    $data=$this->createQuery($sql,[$post->get('pseudo')]);
    $result=$data->fetch();
    $isPasswordOK = password_verify($post->get('password'),password_hash($result['Password'],PASSWORD_BCRYPT));
    return ['result'=>$result,'isPasswordOK'=>$isPasswordOK];
  }

}
?>
