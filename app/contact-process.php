<?php 
header('Access-Control-Allow-Origin: casadoprincipe.pt');
header('Access-Control-Allow-Origin: casadoprincipe.com');

if($_POST['email']){ $email = $_POST['email']; } else { $email = "no email"; }
if($_POST['nome']){ $nome = $_POST['nome']; } else { $nome = "no name"; }
if($_POST['security']){ $security = $_POST['security']; } else { $security = "no name"; }
if($_POST['message']){ $message = $_POST['message']; } else { $message = "no message"; }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$subject = 'Contacto mensagem site';
$to = 'info@casadoprincipe.pt';
$message = '<p> Nome: '.$nome.'</p><p> Email: '.$email.'</p><p> Mensagem: '.$message.'</p>';
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//definições de email
$from = "info <noreplay@casadoprincipe.pt>";

$xheaders = "";
$xheaders .= "From: $from\n";
$xheaders .= "X-Sender: <$from>\n";
$xheaders .= "X-Mailer: PHP\n"; // mailer
$xheaders .= "X-Priority: 1\n"; //1 Urgent Message, 3 Normal
$xheaders .= "Content-Type:text/html; charset=\"utf-8\"\n";
//envio
mail($to, $subject, $message, $xheaders,'-f ace.wf.home@gmail.com'); 
//finalizar
echo "email sended";
?>