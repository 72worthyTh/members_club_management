<?php 
namespace Models;

class Users extends Model{


	protected $table="users";
    protected $table_id="iduser";
    
    function insert(string $nom,string $prenom, string $telephone,string $photo,string $username,string $password,int $etat,string $role):void{
        $query =   $this->pdo->prepare('INSERT INTO users 
        SET  nom = :nom, prenom = :prenom,telephone = :telephone,photo=:photo,username = :username,password=:password,etat = :etat,role = :role' );
        $query->execute(compact('nom','prenom','telephone','photo', 'username','password','etat','role'));
        } 
    function login($username,$password){
        $query =  $this->pdo->prepare("SELECT * FROM users WHERE
         username ='$username'AND password='$password'");
        $query->execute();
        $item = $query->fetch();
        return $item;
    }
}




 ?>