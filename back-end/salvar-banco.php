<?php
include_once "conexao.php";

$tipo_contato = $_POST['tipo_contato'];
$nome = $_POST['nome'];
$empresa = $_POST['empresa'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$query_contato = "INSERT INTO contatos (tipo_contato, nome, empresa, email, telefone, mensagem) VALUES (:contato, :nome, :empresa, :email, :telefone, :mensagem)";

$salvar_contato = $conn->prepare($query_contato);
$salvar_contato->bindParam(':contato', $tipo_contato, PDO::PARAM_STR);
$salvar_contato->bindParam(':nome', $nome, PDO::PARAM_STR);
$salvar_contato->bindParam(':empresa', $empresa, PDO::PARAM_STR);
$salvar_contato->bindParam(':email', $email, PDO::PARAM_STR);
$salvar_contato->bindParam(':telefone', $telefone, PDO::PARAM_STR);
$salvar_contato->bindParam(':mensagem', $mensagem, PDO::PARAM_STR);

$salvar_contato->execute();

if ($salvar_contato->rowCount()) {
	require 'lib/vendor/autoload.php';
 
        $email = new \SendGrid\Mail\Mail();

        $email->setFrom("teste.contato5430@gmail.com", "teste");
        $email->setSubject("Mensagem recebida com sucesso!");
        $email->addTo('maks.silva25@gmail.com', 'max silva');
        $email->addContent("text/plain", "Recebi a mensagem, em breve será respondida: ");
        $email->addContent(
            "text/html",
            "Recebi a mensagem, em breve será respondida: " );

        $sendgrid = new \SendGrid('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');


            try {
                $response = $sendgrid->send($email);
                echo "Mensagem enviada com sucesso, verificar!";
            } catch (Exception $e) {
                //echo 'Caught exception: ' . $e->getMessage() . "\n";
                echo "Erro: Mensagem não enviada!";
            }

} else {

    echo "Erro: Mensagem não enviada com sucesso!<br>";
}

?>