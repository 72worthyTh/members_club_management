<?php 
namespace Models;
 abstract class Model{
 	protected $pdo;
 	protected $table;
 	protected $table_id;
 	public function __construct(){
 		$this->pdo=\Database::getPdo();
 	}

 	public function selectAll(?string $order=""):array{
 		$sql="SELECT * FROM {$this->table}";
 		if ($order) {
 			$sql.=" ORDER BY ".$order;
 		}
 		$result= $this->pdo->query($sql);
 		$item=$result->fetchAll();
 		return $item;
 	}
 	//la fonction de selection avec les id qu'ont veu selectionnera
 	public function find(int $id){
 		$sql=$this->pdo->prepare("SELECT * FROM {$this->table} where {$this->table_id}= :id");
 		$sql->execute(['id'=>$id]);
 		$item=$sql->fetch();
 		return $item;

 	}

 	public function delete(int $id):void{
 		$sql=$this->pdo->prepare("DELETE from {$this->table} WHERE {$this->table_id}= :id");
 		$sql->execute(['id'=>$id]);
	 }
	 

	 public function maxid(){
	 $sql=$this->pdo->prepare("SELECT {$this->table_id} FROM {$this->table} ORDER BY {$this->table_id}  DESC LIMIT 1");
		$sql->execute();
		$item=$sql->fetchAll();
		return $item;

	}
 }

 ?>