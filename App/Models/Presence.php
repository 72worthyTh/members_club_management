<?php 
namespace Models;

class Presence extends Model{


	protected $table="presense";
	protected $table_id="idp";
	function insert(string $date_presence){

		$sql=$this->pdo->prepare('INSERT INTO  presense SET date_presence=:date_presence');
		$sql->execute(compact('date_presence'));
		$dp=$this->pdo->lastInsertId();


	}

    function update(string $date_presence,int $id){

		$sql=$this->pdo->prepare('UPDATE presense SET date_presence=:date_presence WHERE idp=: idp');
		$sql->execute(compact('date_presence','idp'));


	}
	function joinmembres($idgroupe,$anne){
		$sql=$this->pdo->prepare("SELECT * FROM integration inner join groupe on groupe.idg=integration.idg
		 inner join membres on membres.idm=integration.idm where  etat IS NULL and integration.idg='$idgroupe' and integration.anne='$anne'");
 		$sql->execute();
 		$item=$sql->fetchAll();
 		return $item;
	}


}




 ?>