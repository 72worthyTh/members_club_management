<?php 
namespace Models;

class Presentation extends Model{


	protected $table="presentation";
	protected $table_id="idpresentation";
	function insert(int $idm, int $idp,string $statut){

		$sql=$this->pdo->prepare('INSERT INTO  presentation SET idm=:idm ,idp=:idp,statut=:statut');
		$sql->execute(compact('idm','idp','statut'));


	}

	function update(int $idm,int $idp,string $statut,int $idpresentation){

		$sql=$this->pdo->prepare('UPDATE  presentation SET idm=:idm ,idp=:idp,statut =:statut WHERE idpresentation =:idpresentation');
		$sql->execute(compact('idm','idp','statut'));


	}


}




 ?>