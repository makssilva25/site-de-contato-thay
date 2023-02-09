<?php

	if (!empty($_GET['id'])) {
					
		include_once('config.php');

		$id = $_GET['id'];

		$sqlSelect = "SELECT * FROM contatos WHERE id=$id";
		$sqlDelete = "DELETE FROM contatos WHERE id=$id";
		$resultadoDelete = $conn->query($sqlDelete);

	}

	header('Location: ../painel.php');

?>