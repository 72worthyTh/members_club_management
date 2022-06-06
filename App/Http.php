<?php 
//pour le header location
class Http{
public static function redirect(string $Url){
	header("location:$Url");
	exit();
}

}

 ?>