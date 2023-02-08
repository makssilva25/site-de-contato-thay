<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "banco_og";

$conn = new mysqli($host,$user,$pass,$dbname );
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
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
  		integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
  		crossorigin="anonymous"></script>
    <script type="text/javascript" src="painel.js"></script>

</head>


<body>
	<header class="header-painel-principal">
		<div class="header-painel--titulo">
			<h1>Listagem de contatos recebidos</h1>
		</div>

	</header>

<main>

<div class="container">

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
					echo "<td>". $receber_dados['mensagem']."</td>";
				}

		    ?>

		</tbody>
	</table>
</div>
		
	</main>

	<footer class="footer">
		<div class="conteudo-footer  container-interno">
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
