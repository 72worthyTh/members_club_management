<?php 
namespace Models;

class Membres extends Model{


	protected $table="membres";
	protected $table_id="idm";
	function insert(string $nom, string $prenom,int $frais,string	$role,string  $niveau,string $sexe,string $telephone,string $num_etudiant,string $adress ,string $photo){

		$sql=$this->pdo->prepare('INSERT INTO  membres SET nomm=:nom ,prenom=:prenom, frais_inscr=:frais,role=:role,niveau=:niveau,sexe=:sexe,telephone=:telephone,num_etudiant=:num_etudiant,adress=:adress,photo=:photo');
		$sql->execute(compact('nom','prenom','frais','role','niveau','sexe','telephone','num_etudiant','adress','photo'));


	}

	function update(string $nom, string $prenom,int $frais,string	$role,string  $niveau,string $sexe,string $telephone,string $num_etudiant,string $adress ,string $photo,int $idm){

		$sql=$this->pdo->prepare('UPDATE membres SET nomm=:nom ,prenom=:prenom,frais_inscr=:frais,role=:role,niveau=:niveau,sexe=:sexe,telephone=:telephone,num_etudiant=:num_etudiant,adress=:adress,photo=:photo where idm =:idm');
		$sql->execute(compact('nom','prenom','frais','role','niveau','sexe','telephone','num_etudiant','adress','photo','idm'));


	}
	//LASTINSERTID
	function insert2(string $nom, string $prenom,int $frais,string	$role,string  $niveau,string $sexe,string $telephone,string $num_etudiant,string $adress ,string $photo){

		$sql=$this->pdo->prepare('INSERT INTO  membres SET nomm=:nom ,prenom=:prenom,frais_inscr=:frais,role=:role,niveau=:niveau,sexe=:sexe,telephone=:telephone,num_etudiant=:num_etudiant,adress=:adress,photo=:photo');
		$sql->execute(compact('nom','prenom','frais','role','niveau','sexe','telephone','num_etudiant','adress','photo'));
$last_id=$this->pdo->lastInsertId();

	}
	function joinmembres($idgroupe,$anne){
		$sql=$this->pdo->prepare("SELECT * FROM integration inner join groupe on groupe.idg=integration.idg
		 inner join membres on membres.idm=integration.idm where  etat IS NULL and groupe.idg=$idgroupe and integration.anne=$anne");
 		$sql->execute();
 		$item=$sql->fetchAll();
 		return $item;
	}



}




 ?>