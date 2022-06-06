<?php 
namespace Controllers;
class Presence extends Controller{
	protected $modelName= \Models\membres::class;
  

    public function index(){
	
	}

public function new(){
    $groupe= new \Models\Groupe();
    $integration=new \Models\Integration();
    $groupem=$groupe->selectAll();
    $integrationn=$integration->dinsctaffiche();
    $pagetitle="Liste des membres";
    if ((@$_POST['groupe']) & @$_POST['anne']) {
	$membres=$this->model->joinmembres($_POST['groupe'],$_POST['anne']);
    // $membres=$this->model->selectAll();
    \Renderer::renderone('presence/new',compact('pagetitle','membres','groupem','integrationn'));
}else{
    \Renderer::renderone('presence/new',compact('pagetitle','groupem','integrationn'));

}
}

	   public function insert(){
        $presence= new \Models\Presence();

        $presentation= new \Models\Presentation();

        $date=$_POST['date'];
        $presence->insert($date);
        $pre=$presence->maxid();
        foreach ($pre as $value) {
         $idpresence=$value['idp'];
        }	
        for ($i=0; $i <(count($_POST['idmembre'])); $i++) { 
            $idm=$_POST['idmembre'][$i];
            $presence=$_POST['presence'.$i];
      $presentation->insert($idm,$idpresence,$presence);
        }
      
        \Http::redirect('index.php?controller=presence&task=new');
	
		}
	
	   
		public  function delete(){
			if(isset($_GET['id'])){
			 $id=$_GET['id'];
			 $this->model->delete($id);
			 \Http::redirect('index.php?controller=membres&task=index');
				
			}
		}
	
 

 

	 }


