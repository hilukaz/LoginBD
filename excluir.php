<?php
	require_once("bd/variavel.php");

	$controller = new cadastroController();
	$result = $controller->excluir($_GET['id']);
    //instancia e pega o id jogando no excluir do objeto

?>