<?php 
namespace Controllers;
class Membres extends Controller{
	protected $modelName= \Models\Membres::class;

	public function index(){
		$groupe= new \Models\Groupe();
		$integration=new \Models\Integration();

		$groupem=$groupe->selectAll();
		$integrationn=$integration->dinsctaffiche();
		$pagetitle="Liste des membres";
		if ((@$_POST['groupes']) & @$_POST['annes']) {
		$membres=$this->model->joinmembres($_POST['groupes'],$_POST['annes']);
		//\Renderer::renderone('membres/index',compact('pagetitle','membres','groupem','integrationn'));

		}
		else{
			\Renderer::renderone('membres/index',compact('pagetitle','groupem','integrationn'));

		}
	}

/*
**@ fonction pour l'avancement d'un membre

*/


public function avance(){
	$groupe=new \Models\Groupe();
	$integration=new \Models\Integration();
	$integrationn=$integration->dinsctaffiche();
	$groupem=$groupe->selectAll();
	$pagetitle="Avancement";
	// \Renderer::renderone("membres/m_avance",compact('pagetitle','groupem','integrationn'));
    if ((@$_POST['groupe']) & @$_POST['anne']) {
		$membres=$this->model->joinmembres($_POST['groupe'],$_POST['anne']);
		\Renderer::renderone('membres/m_avance',compact('pagetitle','membres','groupem','integrationn'));
	}else{
		\Renderer::renderone('membres/m_avance',compact('pagetitle','groupem','integrationn'));
	
	}

}



public function m_avance(){
		$integration= new \Models\Integration();
		$m=new \Models\Membres();
		$niveau=$_POST['groupe'];
		$anne=$_POST['anne'];

//  foreach($pre as $value){
// 	 $idmembre=$value['idm'];
// 	}
	for($i=0;$i<count($_POST['idint']);$i++){
		$idmembre=$_POST['avance'.$i];
		$idint=$_POST['idint'][$i];

	$integration->insert($idmembre,$niveau,$anne);
	$integration->update($idint);
	}
			\Http::redirect("index.php?controller=membres&task=new");
}
public function new(){
	$gr= new \Models\Groupe();
	$groupe=$gr->selectAll('nomgroupe');
	if(@$_GET['id']){
		$membres=$this->model->find($_GET['id']);
		$pagetitle="Edition membres";
		\Renderer::renderone('membres/new',compact('pagetitle','membres'));
	}else{

	$pagetitle="Nouveau membres";
	\Renderer::renderone('membres/new',compact('pagetitle','groupe'));
}

}

	public function insert(){
		$gr= new \Models\Integration();
		$nommembre=$_POST['nommembre'];
		$prenommembre=$_POST['prenommembre'];
		$frais_inscr=$_POST['frais_inscr'];
		$role=$_POST['role'];
		$niveau=$_POST['niveau'];
		$sexe=$_POST['sexe'];
		$telephone=$_POST['telephone'];
		$numeroetu=$_POST['numeroetu'];
		$address=$_POST['address'];
		$anne=$_POST['anne'];


		
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
			$this->model->update($nommembre,$prenommembre,$frais_inscr,$role,0,$sexe,$telephone,$numeroetu,$address,$photo,$id);
		}else{
			//move_uploaded_file($photo_temp, 'images/'.$photo);
				if($photo==""){
					$photo="";
				}else{
					move_uploaded_file($photo_temp, 'images/'.$photo);
				}
				$this->model->insert($nommembre,$prenommembre,$frais_inscr,$role,0,$sexe,$telephone,$numeroetu,$address,$photo);


				$integration= new \Models\Integration();
	            $m=new \Models\Membres();


        
        $pre=$m->maxid();
        foreach ($pre as $value) {
         $idmembre=$value['idm'];
		}	
        $integration->insert($idmembre,$niveau,$anne);
		
				\Http::redirect("index.php?controller=membres&task=new");
		}

		}
	   
		public  function delete(){
			if(isset($_GET['id'])){
			 $id=$_GET['id'];
			 $this->model->delete($id);
			 \Http::redirect('index.php?controller=membres&task=index');
				
			}
		}
	
 

	}


