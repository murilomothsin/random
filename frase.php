<?php

if(isset($_POST) && $_POST['frase'] == 1){
	
	$tamanho = rand(3, 10);
	$randomica = rand(0, 4);

	$artigos = array();
	$artigos[] = 'o';
	$artigos[] = 'a';
	$artigos[] = 'e';
	$artigos[] = 'os';
	$artigos[] = 'as';
	
	$frase = $artigos[$randomica];

	for ($i=0; $i < $tamanho; $i++) { 
		
		$palavra = http_head("http://www.dicionario-aberto.net/random", array("timeout"=>5), $info);
		$explode = explode('/', $info['redirect_url']);
		$frase .= ' ' . end($explode);

	}

	echo $frase;

}
?>