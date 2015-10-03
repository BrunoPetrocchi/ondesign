<?php
	@session_start();
	if(!isset($_SESSION["IDUSUARIO"]) || !isset($_SESSION["SENHA"])){
		echo "Efetue login novamente! <a href='./'>Clique aqui</a>";
		exit();
	}
?>

