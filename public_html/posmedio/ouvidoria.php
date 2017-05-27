<?php

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
if ($nome && $endereco && $cidade && $uf && $email && $mensagem) {
    require_once('../classes/phpmailer.class.php');
    $nome = utf8_decode($nome);
    $mensagem = nl2br($mensagem);
    $mail = new PHPMailer(true);
    try {
        $mail->IsMail(true);
        $mail->IsHTML(true);
        $mail->SetLanguage("br");
        $mail->From = $email;
        ;
        $mail->FromName = $nome;
        //$mail->AddAddress('secretaria@cnecbento.com.br', 'Secretaria Complexo Cenecista');
        //$mail->AddAddress('ouvidoria@cnecbento.com.br', 'Ouvidoria Complexo Cenecista');
        $mail->AddAddress('0725.cursostecnicos@cnec.br', 'Ouvidoria Complexo Cenecista');
        //$mail->AddAddress('fernando@ween.com.br', 'Fernando Henrique');

        $dados['nome'] = $nome;
        $dados['endereco'] = $endereco;
        $dados['cidade'] = $cidade;
        $dados['uf'] = $uf;
        $dados['mensagem'] = $mensagem;

        $corpo = file_get_contents('../emails-template/faculdade-ouvidoria.php', 'r');
        echo $corpo;
        $mail->Body = $corpo;
        $mail->Subject = utf8_decode('[' . $tipo . '] Mensagem enviada pelo site');
        if ($mail->Send()) {
            $_SESSION['alerta_msg'] = 'E-mail enviado com sucesso, em breve entraremos em contato!';
            $_SESSION['alerta_tipo'] = 'sucesso';
            $_SESSION['alerta_titulo'] = 'Sucesso!';
        } else {
            $_SESSION['alerta_msg'] = 'Falha ao enviar o e-mail!';
            $_SESSION['alerta_tipo'] = 'erro';
            $_SESSION['alerta_titulo'] = 'Erro!';
        }
    } catch (phpmailerException $e) {
        echo $e->errorMessage(); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
        echo $e->getMessage(); //Boring error messages from anything else!
    }
}

$smarty->assign('title', 'Ouvidoria');
$smarty->display('ouvidoria.tpl');