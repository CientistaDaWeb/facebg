<?php

$nome = $_POST['nome'];
if ($nome) {

    require_once('../classes/phpmailer.class.php');
    $nome = utf8_decode($nome);
    $mail = new PHPMailer(true);
    try {
        $mail->IsSMTP();
        $mail->Host = "179.96.225.9";
        $mail->SMTPAuth = true;
        $mail->Port = 25;
        $mail->Username = "site";
        $mail->Password = "st13f5";

        $mail->IsHTML(true);
        $mail->SetLanguage("br");
        $mail->From = 'secretaria@cnecbento.com.br';
        $mail->FromName = $nome;
        $mail->AddAddress('secretaria@cnecbento.com.br', 'Secretaria Complexo Cenecista');
        //$mail->AddAddress('fernando@webscientist.com.br', 'Fernando Henrique');

        $smarty->assign('nome', $nome);

        $corpo = $smarty->fetch('email/inscricao_centro.tpl');

        $mail->Body = utf8_decode($corpo);
        $mail->Subject = utf8_decode('Inscrição para o Centro Acadêmico');
        if ($mail->Send()) {
            $smarty->assign('temp_msg', 'E-mail enviado com sucesso!');
        } else {
            $smarty->assign('temp_msg', 'Falha ao enviar o e-mail!');
        }
    } catch (phpmailerException $e) {
        $smarty->assign('temp_msg', $e->errorMessage()); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
        $smarty->assign('temp_msg', $e->getMessage()); //Boring error messages from anything else!
    }
}

$smarty->assign('title', 'Inscrição Centro Acadêmico');

$smarty->display('inscricao_centro.tpl');