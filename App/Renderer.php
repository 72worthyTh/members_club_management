<?php 
class Renderer{
	public static function renderone(string $path,array $variables=[])
	{
		extract($variables);
		ob_start();
		require('vues/'.$path.'.html.php');
		$pageContent=ob_get_clean();
		require('vues/layout.html.php');
	}
}

 ?>