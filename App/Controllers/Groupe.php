<?php 
namespace Controllers;
class Groupe extends Controller{
	protected $modelName= \Models\groupe::class;

	public function index(){
		$groupe=$this->model->selectAll();
		$pagetitle="Liste des Groupes";
		\Renderer::renderone('groupes/index',compact('pagetitle','groupe'));
	}

public function new(){
	if(isset($_GET['id'])){
		$groupe=$this->model->find($_GET['id']);
		$pagetitle="Edition groupe";
		\Renderer::renderone('groupes/new',compact('pagetitle','groupe'));
	}else{

	$pagetitle="Nouveau groupe";
	\Renderer::renderone('groupes/new',compact('pagetitle'));
}

}

	public function insert(){
		$nomgroupe=$_POST['nomgroupe'];
	
	if(@$_POST['id']){
			$id=$_POST['id'];
            $this->model->update($nomgroupe,$id);
            \Http::redirect('index.php?controller=groupe&task=index');
            
		}else{
                $this->model->insert($nomgroupe);
                
                \Http::redirect('index.php?controller=groupe&task=new');

		}
    }
		public  function delete(){
			if(isset($_GET['id'])){
			 $id=$_GET['id'];
			 $this->model->delete($id);
			 \Http::redirect('index.php?controller=groupe&task=index');
				
			}
		}
	
 

	}


