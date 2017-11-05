<?php
require_once './phpMailer/class.phpmailer.php';
require_once './phpMailer/class.smtp.php';
require_once './phpMailer/class.pop3.php';


$nome = $_POST['nome'];
$email = trim($_POST['email']);
$telefone = $_POST['telefone'];
$texto = $_POST['texto'];

$mail = new PHPMailer();

/*  SMTP config */
$mail->isSMTP(true);                                      
$mail->Host = 'smtp.gmail.com'; 
$mail->SMTPAuth = true;                               
$mail->Username = 'henrique.sylvester@gmail.com';                 
$mail->Password = '';                           
$mail->SMTPSecure = 'tls';                            
$mail->Port = 587;                  

$mail->addReplyTo($email, $nome);
$mail->setFrom('$henrique.sylvester@gmail.com', 'Sylvester');
$mail->addAddress('henrique.sylvester@gmail.com', 'Sylvester Henrique');     
$mail->isHTML(true);                                  

$mail->Subject = 'Email da pagina pessoal';
$mail->Body    = "Nome: $nome <br> Email: $email <br> Telefone: $telefone <br><br> Assunto: $texto";

if(!$mail->send()) {    
    echo "<script>alert('O email não foi enviado: $mail->ErrorInfo'); window.location = 'contato.html';</script>";
} else {
    echo "<script>alert('O email foi enviado com sucesso!'); window.location = 'contato.html';</script>";
}
?>
