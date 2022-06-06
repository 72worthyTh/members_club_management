<?php 
namespace Controllers;
class Membres extends Controller{
	protected $modelName= \Models\Membres::class;

	public function index(){
		$membres=$this->model->selectAll();
		$pagetitle="Liste des membres";
		\Renderer::renderone('membres/index',compact('pagetitle','membres'));
	}

public function new(){
	if(@$_GET['id']){
		$membres=$this->model->find($_GET['id']);
		$pagetitle="Edition membres";
		\Renderer::renderone('membres/new',compact('pagetitle','membres'));
	}else{

	$pagetitle="Nouveau membres";
	\Renderer::renderone('membres/new',compact('pagetitle'));
}

}

	public function insert(){
		$nommembre=$_POST['nommembre'];
		$prenommembre=$_POST['prenommembre'];
		$frais_inscr=$_POST['frais_inscr'];
		$role=$_POST['role'];
		$niveau=$_POST['niveau'];
		$sexe=$_POST['sexe'];
		$telephone=$_POST['telephone'];
		$numeroetu=$_POST['numeroetu'];
		$address=$_POST['address'];

		
		$photo=$_FILES['photo']['name'];
		$photo_temp=$_FILES['photo']['tmp_name'];

	
	if(!empty($_POST['id'])){
			$id=$_POST['id'];
		//si la foto est vide on garde la foto se trouvant dans la bdd
		//$id variable utiliser pour la personne qu on veut etudier
			// if($photo==""){
			// 	$membres=$this->model->find($id);
			// 	$photo=$membres['photo'];
			// }else{
			// 	$photo=$_FILES['photo']['name'];
			// 	$photo_temp=$_FILES['photo']['tmp_name'];
			// 	move_uploaded_file($photo_temp, 'images/'.$photo);
			// }
			$this->model->update($nommembre,$prenommembre,$frais_inscr,$role,$niveau,$sexe,$telephone,$numeroetu,$address,$photo,$id);
		}else{
			//move_uploaded_file($photo_temp, 'images/'.$photo);
				if($photo==""){
					$photo="";
				}else{
					move_uploaded_file($photo_temp, 'images/'.$photo);
				}
				$this->model->insert($nommembre,$prenommembre,$frais_inscr,$role,$niveau,$sexe,$telephone,$numeroetu,$address,$photo,$photo_temp);
				\Renderer::renderone('membres/new');
		}
	
		// 	if($sql){
		// 	$msg="felicitaion mr ( ".$nommembre. " ) vos donnees sont inseret avec success";
		// }
		}
	   
		public  function delete(){
			if(isset($_GET['id'])){
			 $id=$_GET['id'];
			 $this->model->delete($id);
			 \Http::redirect('index.php?controller=membres&task=index');
				
			}
		}
	
 

	}


