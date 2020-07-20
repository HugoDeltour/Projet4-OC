<?php

namespace App\src\DAO;

use App\config\parametre;
use App\src\model\chapitre;

/**
 * class chapitreDAO
 * @packages App\src\DAO
 * Requete SQL basé sur la table 'chapitre'
 */
class chapitreDAO extends DAO{

	private function buildObjectChapitre($row){
		$chapitre = new chapitre();
		$chapitre->setId($row['id_chapitre']);
		$chapitre->setTitle($row['titre_chapitre']);
		$chapitre->setText($row['text_chapitre']);
		$chapitre->setAuthor($row['auteur']);
		return $chapitre;
	}

	public function getChapitres(){
		$sql='SELECT id_chapitre, titre_chapitre, text_chapitre, auteur FROM chapitre';
		$result = $this->createQuery($sql);
		$chap=[];
		foreach ($result as $row) {
			$idChap=$row['id_chapitre'];
			$chap[$idChap]=$this->buildObjectChapitre($row);
		}
		$result->closeCursor();
		return $chap;
	}

	public function getChapitre($chapID){
		$sql='SELECT id_chapitre, titre_chapitre, text_chapitre, auteur FROM chapitre WHERE id_chapitre = ?';
		$result= $this->createQuery($sql,[$chapID]);
		$chap = $result->fetch();
		$result->closeCursor();
		return $this->buildObjectChapitre($chap);
	}

	public function ajoutChapitre(parametre $chap){
		$sql = 'INSERT INTO chapitre (titre_chapitre,text_chapitre,auteur) VALUES(?,?,?)';
		$this->createQuery($sql, [$chap->get('titre_chapitre'),$chap->get('text_chapitre'),$chap->get('auteur')]);
	}

	public function modifChapitre(parametre $post, $chapID){
		$sql = 'UPDATE chapitre SET titre_chapitre=:title, text_chapitre=:content, auteur=:author WHERE id_chapitre =:chapID ';
		$this->createQuery($sql,[
			'title'=> $post->get('titre_chapitre'),
			'content'=> $post->get('text_chapitre'),
			'author'=> $post->get('auteur'),
			'chapID'=> $chapID
		]);
	}

	public function supprimerChapitre($chapID){
		$sql = 'DELETE FROM commentaire WHERE commentaire_id_chapitre=?';
		$this->createQuery($sql,[$chapID]);
		$sql = 'DELETE FROM chapitre WHERE id_chapitre=?';
		$this->createQuery($sql,[$chapID]);
	}

}
?>
