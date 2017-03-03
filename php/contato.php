<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Saúde Agendada</title>
<meta charset="utf-8" />	

<link rel="shortcut icon" href="../midia/img/lotusicone.png" type="image/x-icon">
<link href="../css/mensagem-contato.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="mensagem">
<?php $email_destino="fivegeeksdesign@outlook.com";

$assunt="Mensagem de contato do Cliente";

if ((isset($_POST['nome'])) && (isset($_POST['email'])) && (isset($_POST['tel'])) && (isset($_POST['estado'])) && (isset($_POST['assunto'])) && (isset($_POST['mensage']))){
$nome=$_POST['nome'];$email=$_POST['email'];$telefone=$_POST['tel'];$estadocidade=$_POST['estado'];$assunto=$_POST['assunto'];$mensage=$_POST['mensage'];
}else{echo"Todos os campos devem ser preenchidos!";}
$mensagem="nome do usuario:$nome\n";$mensagem.= "email:$email\n"; 
$mensagem.="Telefone:$telefone\n";$mensagem.="Estado/Cidade:$estadocidade";
$mensagem.="Assunto:$assunto\n";$mensagem.="Mensagem:$mensage\n";
//mail($email_destino,$assunt,$mensagem);
//para este comando (mail) funcionar precisa de um provedor de email só funciona hospedado 

echo" <br/><br/><br/><center>Sua Mensagem foi Enviada com Sucesso</center>";
?>
</div>
</body>
</html>