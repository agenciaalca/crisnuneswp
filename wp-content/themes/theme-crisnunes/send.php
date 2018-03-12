<?php
$name = $_POST['name'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$message = $_POST['message'];
$error = "";
$errorMessage = 'Desculpe, mensagem não enviada.';

//Validate first
if(empty($name)||empty($email)||empty($message)) 
{
    echo "* São Campos Obrigatórios!";
    header('Location: index.php');
}
//validate against any email injection attempts
if(IsInjected($email))
{
    echo "Email inválido!";
    header('Location: index.php');
}


$msg =  " Mensagem do formulário de contato do Website Cris Nunes \r\n"; 
$msg =  " Nome : $name \r\n"; 
$msg .= " Email: $email \r\n";
$msg .= " Telefone: $telefone \r\n";
$msg .= " Mensagem : ".stripslashes($_POST['message'])."\r\n\n";


$recipient = "drcrismoreira@gmail.com";// Change the recipient email adress to your adrees  
$sujet =  "Formulário de Contato - Cris Nunes";
$mailheaders = "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n";

if (!$error){

		$sending = mail($recipient, $sujet, $msg, $mailheaders); 
		
		if ($sending) {
				// If the message is sent we output a string to use it 
				echo "SENDING"; 
			} else {
				// Display Error Message
				echo $errorMessage; 
			}
	} else {
		echo $error; // Display Error Message
	}


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?>