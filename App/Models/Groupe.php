<?php 
namespace Models;

class Groupe extends Model{


	protected $table="groupe";
	protected $table_id="idg";
	function insert(string $nom){

		$sql=$this->pdo->prepare('INSERT INTO  groupe SET nomgroupe=:nom');
		$sql->execute(compact('nom'));


	}

		function update(string $nom,int $idg){

		$sql=$this->pdo->prepare('UPDATE   groupe SET nomgroupe=:nom  WHERE idg=:idg');
		$sql->execute(compact('nom','idg'));
		

	}



}




 ?>f