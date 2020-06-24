<?php

namespace App\src\DAO;
use App\config\parametre;
use App\src\model\commentaire;

class commentDAO extends DAO{

  private function buildObjectComment($row){
    $comment = new commentaire();
    $comment->setId($row['ID_Commentaire']);
    $comment->setPseudo($row['Pseudo']);
    $comment->setComment($row['Text_Commentaire']);
    $comment->setDate($row['Date_Creation']);
    $comment->setSignal($row['signaler']);
    return $comment;
  }

  public function getCommentsFromArticle($chapitreId)
  {
      $sql = 'SELECT Pseudo, Text_Commentaire, Date_Creation, signaler, Commentaire_ID_Chapitre FROM commentaire WHERE Commentaire_ID_Chapitre = ? ORDER BY Date_Creation DESC';
      $result = $this->createQuery($sql,[$chapitreId]);
      $comments=[];
      foreach($result as $row){
        $idComment = $row['ID_Commentaire'];
        $comments[$idComment] = $this->buildObjectComment($row);
      }
      $result->closeCursor();
      return $comments;
  }

  public function ajoutCommentaire(parametre $post,$chapID){
    $sql='INSERT INTO commentaire (Pseudo,Text_Commentaire,Date_Creation,signaler,Commentaire_ID_Chapitre) VALUES (?,?,NOW(),?,?)';
    $this->createQuery($sql,[$post->get('pseudo'),$post->get('commentaire'),0,$chapID]);
  }

  public function signalerCommentaire($commentID){
    $sql = 'UPDATE commentaire SET signaler=? WHERE ID_Commentaire=?';
    $this->createQuery($sql,[1,$commentID]);
  }

  public function supprimeCommentaire($commentID){
    $sql = 'DELETE FROM commetaire WHERE ID_Commentaire=?';
    $this->createQuery($sql,[$commentID]);
  }

}

?>
