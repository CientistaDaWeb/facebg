<?php
header('location: http://vestibular.cnec.br/facebg/');
if ($baseURL[2] && $baseURL[2] != 'hotsite') {
    if (is_file('vestibular_' . $baseURL[2] . '.php')) {
        require_once('../classes/vestibulares.class.php');
        require_once('vestibular_' . $baseURL[2] . '.php');
    } else {
        require_once('../404.php');
    }
} else {
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];
    if ($nome && $endereco && $cidade && $uf && $email && $mensagem) {
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
            $mail->AddAddress('vestibular@cnecbento.com.br', 'Vestibular Complexo Cenecista');
            //$mail->AddAddress('fernando@ween.com.br', 'Fernando Henrique');

            $smarty->assign('nome', $nome);
            $smarty->assign('endereco', $endereco);
            $smarty->assign('cidade', $cidade);
            $smarty->assign('uf', $uf);
            $smarty->assign('telefone', $telefone);
            $smarty->assign('mensagem', $mensagem);

            $corpo = $smarty->fetch('email/vestibular.tpl');
            $mail->Body = utf8_decode($corpo);
            $mail->Subject = utf8_decode('Mensagem enviada pelo site');
            if ($mail->Send()) {
                $smarty->assign('temp_msg', 'E-mail enviado com sucesso, em breve entraremos em contato!');
            } else {
                $smarty->assign('temp_msg', 'Falha ao enviar o e-mail!');
            }
        } catch (phpmailerException $e) {
            $smarty->assign('temp_msg', $e->errorMessage()); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            $smarty->assign('temp_msg', $e->getMessage()); //Boring error messages from anything else!
        }
    }

    if (date('Y-m-d') >= '2013-05-09' && date('Y-m-d') <= '2013-07-19'):
        $smarty->assign('mostraBotao', 1);
    endif;

    $smarty->assign('naoMostraFlashTopo', 1);
    $smarty->display('vestibular.tpl');
}