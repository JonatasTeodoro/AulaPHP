<?php

function incluirClasses($nomeClasse){

	if(file_exists($nomeClasse.".php") === true){

		require_onde($nomeClasse.".php");

	}
	
}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){

	if(file_exists("Abstratas" . DIRECTORY_SEPARATOR .$nomeClasse.".php")===true){

		require_onde("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");

	}
});

$carro = new DelRey();

$carro->acelerar(80);

?>