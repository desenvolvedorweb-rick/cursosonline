<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>processando ...</title>
</head>
<body>
 	<?php
 		$nome = $_POST['nome'];
 		$email = $_POST['email'];
 		$assunto = $_POST['assunto'];
 		$mensagem =$_POST['mensagem'];
 	?>

 	<?php
 	$to = "haugusto455@gmail.com";
 	$subject = "$assunto";
 	$message = "<strong>Nome: $nome</strong><br><strong>Email: $email</strong><br><strong>Assunto: $assunto</strong><br><strong>Mensagem: $mensagem</strong><br>";
 	$header = "MIME-VERSION 1.0\N";
 	$header = "Content-type: text/html; charset-iso-8859-1\n";
 	$header = "From: Email\n";
 	mail($to, $subject, $message, $header);

 	echo "Mensagem enviada com sucesso! em brave nossa equipe entrará em contato.";
 	?>
</body>
</html>