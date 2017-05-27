<?php

header('Location: /curso-tecnico/inscricao');

$nome = $_POST['nome'];
$rg = $_POST['rg'];
$curso = $_POST['curso'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
if ($nome && $rg && $curso && $email) {
    require_once('../classes/phpmailer.class.php');
    $nome = utf8_decode($nome);
    $mensagem = nl2br($mensagem);
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
        $mail->From = $email;
        $mail->FromName = $nome;
        $mail->AddAddress('0725.cursostecnicos@cnec.br', 'Cursos Técnicos Cenecista');
        //$mail->AddAddress('fernando@webscientist.com.br', 'Fernando Henrique');

        $smarty->assign('nome', $nome);
        $smarty->assign('rg', $rg);
        $smarty->assign('curso', $curso);
        $smarty->assign('email', $email);
        $smarty->assign('telefone', $telefone);

        $corpo = $smarty->fetch('email/inscricao.tpl');

        $mail->Body = utf8_decode($corpo);

        $mail->Subject = utf8_decode('Nova matrícula - ' . $nome . ' [' . $curso . ']');

        if ($mail->Send()) {
            $smarty->assign('temp_msg', 'Matrícula enviada com sucesso, em breve entraremos em contato!');
        } else {
            $smarty->assign('temp_msg', 'Falha ao enviar o e-mail!');
        }
    } catch (phpmailerException $e) {
        $smarty->assign('temp_msg', $e->errorMessage());
    } catch (Exception $e) {

        $smarty->assign('temp_msg', $e->getMessage());
    }
}
$smarty->assign('title', 'Inscrição');
$smarty->display('inscricao.tpl');