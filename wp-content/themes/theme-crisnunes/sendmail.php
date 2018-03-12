<?php
if (isset($_POST['btnSend'])) {
    $msg = '';
    
    //campos do formulario
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];
    //valida se os campos não estão vazios
    if ((!empty($nome)) && (!empty($email)) && (!empty($telefone)) && (!empty($assunto)) && (!empty($mensagem))) {
        
        $email_remetente = "cristiane@agenciaalca.com"; // deve ser uma conta de email do seu dominio 
        $email_destinatario = "contato@cristianefaria.com"; // email que receberá as mensagens
        $email_recebidoDe = "$email";
        $email_assunto = "Formulário de Contato"; // Este será o assunto da mensagem
        $email_conteudo = "FORMULÁRIO DE CONTATO\n"
            . "<br><b>De:</b> " . $nome
            . "<br><b>Email:</b> " . $email
            . "<br><b>Telefone:</b> " . $telefone
            . "<br><b>Mensagem:</b> " . $mensagem
            . "<br><br>"
            . "<hr>"
            . "<br>Mensagem enviada do formulário de contato da demonstração de formulário de contato com php.";
        //encapsula os dados do cabeçalho do email
        $email_cabecalho = implode("\n", array("From: $email_remetente", "Reply-To: $email_recebidoDe", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));
        
        //utiliza função nativa do php mail para o envio
        //valida se o email foi enviado
        if (mail($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_cabecalho)) {
            
            //mostra mensagem de envio com sucesso
            $msg = '
                <strong>Mensagem enviada com sucesso!</strong> ';
        } else {
            //mostra mensagem de erro ao enviar
            $msg = '
                <strong>Erro ao enviar mensagem, tente novamente! </strong> ';
        }
        
    } else {
        
        //mostra mensagem de erro caso algum dos campos esteja vazio
        $msg = '
                <strong>Preencha todos os campos!! </strong> ';
    }
}