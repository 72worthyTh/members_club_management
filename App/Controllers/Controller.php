<?php 
namespace Controllers;
//nom dans la quelle je travail
abstract class Controller{
protected $model;
protected $modelName;

public function __construct(){
	$this->model=new $this->modelName();
}

 }
 
