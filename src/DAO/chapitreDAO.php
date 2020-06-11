<?php

namespace App\src\DAO;

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

	public function ajoutChapitre($chap){
		extract($chap);
		$sql = 'INSERT INTO chapitre (Titre_Chapitre,Text_Chapitre,Ecrivain) VALUES(?,?,?)';
		$this->createQuery($sql, [$Titre_Chapitre,$Text_Chapitre,$Ecrivain]);
	}

}
?>