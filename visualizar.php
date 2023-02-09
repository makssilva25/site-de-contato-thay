<?php

	if (!empty($_GET['id'])) {
		
		$id = $_GET['id'];
			
		include_once('back-end/config.php');

		$sqlSelect = "SELECT * FROM contatos WHERE id=$id";
		$resultado = $conn->query($sqlSelect);
		
		while($receber_dados = mysqli_fetch_assoc($resultado)) {

			$tipo_contato = $receber_dados['tipo_contato'];
			$nome = $receber_dados['nome'];
			$empresa = $receber_dados['empresa'];
			$email = $receber_dados['email'];
			$telefone = $receber_dados['telefone'];
			$mensagem = $receber_dados['mensagem'];

		}

	}

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
		<div class="container">
			<div class="painel-conteudo-mens row">

				<div class="painel-mensagem col-9 ">
					<div class="titulo-painel ">
						<div>
							<h2>Seu contato é relacionado a:</h2>
							<p><?php echo $tipo_contato ?></p>
						</div>
					</div>

					<div class="mensagem-individual ">
						<div class="mensagem-individual--interno">
							<div>
								<h2>Nome</h2>
								<p><?php echo $nome ?></p>
							</div>
						</div>

						<div class="mensagem-individual--interno">
							<div>
								<h2>Empresa</h2>
								<p><?php echo $empresa ?></p>
							</div>
						</div>

					</div>

					<div class="mensagem-individual ">

						<div class="mensagem-individual--interno">
							<div>
								<h2>E-Email</h2>
								<p><?php echo $email ?></p>
							</div>
						</div>

						<div class="mensagem-individual--interno">
							<div>
								<h2>Telefone</h2>
								<p><?php echo $telefone ?></p>
							</div>
						</div>

					</div>

					<div class="painel-mensagem">
						<div>
							<h2>Mensagem</h2>
							<p><?php echo $mensagem ?></p>
						</div>
					</div>

				</div>

				<div class="botao-voltar col-3">
					<div>
						<a href="painel.php" class="btn btn-primary">voltar</a>
					</div>
				</div>

			</div>
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
