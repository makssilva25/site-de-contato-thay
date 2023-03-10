<?php

include_once('back-end/config.php');

$sql = "SELECT * FROM contatos ORDER BY id DESC";
$resultado = $conn->query($sql);

?>


<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Página de Contato</title>
    <link rel="stylesheet" type="text/css" href="style-v1.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
  		integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
  		crossorigin="anonymous"></script>
    <script type="text/javascript" src="painel.js"></script>
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>


<body>
	<header class="header-painel-principal">
		<div class="header-painel--titulo">
			<h1>Listagem de contatos recebidos</h1>
		</div>

	</header>

	<main>
		<div class="container table-responsive ajustar-tamanho">

			<table class="tabela-principal table table-bordered table-hover">
				<thead class="table-active" >
				   	<tr>
				      	<th scope="col">#</th>
				      	<th scope="col">Tipo de contato</th>
				      	<th scope="col">Nome</th>
				      	<th scope="col">Empresa</th>
				     	 <th scope="col">E-Email</th>
				      	<th scope="col">Telefone</th>
				      	<th scope="col">mensagem</th>
				      	<th scope="col">Visualizar</th>
				    </tr>
				 </thead>
				 <tbody>
				    <?php
						while($receber_dados = mysqli_fetch_assoc($resultado)) {

							echo"<tr>";
							echo "<td>". $receber_dados['id']."</td>";
							echo "<td>". $receber_dados['tipo_contato']."</td>";
							echo "<td>". $receber_dados['nome']."</td>";
							echo "<td>". $receber_dados['empresa']."</td>";
							echo "<td>". $receber_dados['email']."</td>";
							echo "<td>". $receber_dados['telefone']."</td>";
							echo "<td>ver mais...</td>";

							echo "<td><a class='btn btn-primary btn-sm margem' href='visualizar.php?id=$receber_dados[id]'><i class='bi bi-eye'></i></a>
							<a class='btn btn-primary btn-sm' href='back-end/delete.php?id=$receber_dados[id]'><i class='bi bi-trash'></i></a> </td>";

						/*	echo "<td><a class='btn btn-primary btn-sm' href='visualizar.php?id=$receber_dados[id]'><i class='bi bi-trash'></i></a></td>";*/

						}

				    ?>

				</tbody>
			</table>

		</div>		
	</main>

	<footer class="footer-painel ">
		<div class="conteudo-footer  container-interno ">
			<p>2022 © THAYNARA OG. Todos os direitos reservados.</p>
			<ul class="">
				<li>
					<a href="#"><img src="assets/img/icon-instagram.svg"></a>
				</li>
				<li>
					<a href="#"><img src="assets/img/icon-youtube.svg"></a>
				</li>
				<li>
					<a href="#"><img src="assets/img/icon-twitter.svg"></a>
				</li>
				<li>
					<a href="#"><img src="assets/img/icon-facebook.svg"></a>
				</li>
				<li>
					<a href="#"><img src="assets/img/icon-snap.svg"></a>
				</li>
				<li>
					<a href="#"><img src="assets/img/icon-tiktok.svg"></a>
				</li>
			</ul>
		</div>
	</footer>


</body>


</html>
