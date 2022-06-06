<?php 
namespace Models;

class Integration extends Model{


	protected $table="integration";
	protected $table_id="idint";
	function insert(int $idm,int $idg,int $anne){

		$sql=$this->pdo->prepare('INSERT INTO  integration SET idm=:idm,idg=:idg,anne=:anne');
		$sql->execute(compact('idm','idg','anne'));


	}

		function update(int $idint){

            $sql=$this->pdo->prepare('UPDATE  integration SET etat=1 where idint=:idint');
            $sql->execute(compact('idint'));
    

	}

	function dinsctaffiche(){
		$sql=$this->pdo->prepare("SELECT  distinct anne FROM integration");
		$sql->execute();
		$item=$sql->fetchAll();
		return $item;
	}



}




 ?>f