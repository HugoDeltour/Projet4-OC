<?php

namespace App\src\DAO;

use App\config\parametre;
use App\src\model\chapitre;

class chapitreDAO extends DAO{

	private function buildObjectChapitre($row){
		$chapitre = new chapitre();
		$chapitre->setId($row['ID_Chapitre']);
		$chapitre->setTitle($row['Titre_Chapitre']);
		$chapitre->setText($row['Text_Chapitre']);
		$chapitre->setAuthor($row['Ecrivain']);
		return $chapitre;
	}

	public function getChapitres(){
		$sql='SELECT * FROM chapitre';
		$result = $this->createQuery($sql);
		$chap=[];
		foreach ($result as $row) {
			$idChap=$row['ID_Chapitre'];
			$chap[$idChap]=$this->buildObjectChapitre($row);
		}
		$result->closeCursor();
		return $chap;
	}

	public function getChapitre($chapID){
		$sql='SELECT * FROM chapitre WHERE ID_Chapitre = ?';
		$result= $this->createQuery($sql,[$chapID]);
		$chap = $result->fetch();
		$result->closeCursor();
		return $this->buildObjectChapitre($chap);
	}

	public function ajoutChapitre(parametre $chap){
		$sql = 'INSERT INTO chapitre (Titre_Chapitre,Text_Chapitre,Ecrivain) VALUES(?,?,?)';
		$this->createQuery($sql, [$chap->get('Titre_Chapitre'),$chap->get('Text_Chapitre'),$chap->get('Ecrivain')]);
	}

	public function modifChapitre(parametre $post, $chapID){
		$sql = 'UPDATE chapitre SET Titre_Chapitre=:title, Text_Chapitre=:content, Ecrivain=:author WHERE ID_Chapitre =:chapID ';
		$this->createQuery($sql,[
			'title'=> $post->get('Titre_Chapitre'),
			'content'=> $post->get('Text_Chapitre'),
			'author'=> $post->get('Ecrivain'),
			'chapID'=> $chapID
		]);
	}

	public function supprimerChapitre($chapID){
		$sql = 'DELETE FROM commentaire WHERE Commentaire_ID_CHapitre=?';
		$this->createQuery($sql,[$chapID]);
		$sql = 'DELETE FROM chapitre WHERE ID_Chapitre=?';
		$this->createQuery($sql,[$chapID]);
	}

}
?>
