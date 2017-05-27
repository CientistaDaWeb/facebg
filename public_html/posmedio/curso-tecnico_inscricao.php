<?php

require_once('../classes/posmedio_inscricoes.class.php');
$smarty->assign('title', 'Matricula de Curso Técnico');
$inscricao = new posmedio_inscricoes();
$inscrever = true;

if ($inscrever):
    if ($_POST['nome']):
        $id = $inscricao->inscrever($_POST);
        if ($id):
            if (date('Ymd') >= '20130703'):
                $valor = 20;
            else:
                $valor = 10;
            endif;

            $boleto = cripfy($inscricao->gera_boleto($nosso_numero, $id, $valor), 'c3n3cv1r7');

            $smarty->assign('cadastrou', true);
            $smarty->assign('id', $boleto);

            $nome = utf8_decode($_POST['nome']);
            $email = $_POST['email'];
            require_once('../classes/phpmailer.class.php');
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->Host = "179.96.225.9";
            $mail->SMTPAuth = true;
            $mail->Port = 25;
            $mail->Username = "site";
            $mail->Password = "st13f5";

            $mail->IsHTML(true);
            $mail->SetLanguage("br");
            $mail->From = '0725.cursostecnicos@cnec.br';
            $mail->FromName = utf8_decode('Cursos Técnicos Cenecista');
            $mail->AddAddress($email, $nome);
            $mensagem = utf8_decode('Olá ' . $nome . ', <br><br>
                Sua inscrição no Curso Técnicos' . $_POST['curso'] . ' foi efetuada com sucesso<br><br>
                Para imprimir o boleto acesse o seguinte link <a href="http://posmedio.cnecbento.com.br/curso-tecnico/boleto/' . $boleto . '">http://posmedio.cnecbento.com.br/curso-tecnico/boleto/' . $boleto . '</a><br>
                Ou copie esse link http://posmedio.cnecbento.com.br/curso-tecnico/boleto/' . $boleto . ' e cole no seu navegador de preferência<br><br><br>' .
                    'Atenciosamente,<br>Complexo Cenecista');
            $corpo = '<HTML><BODY style="PADDING-RIGHT: 0px; PADDING-LEFT: 0px; FONT-SIZE: 14px; PADDING-BOTTOM: 0px; MARGIN: 0px; COLOR: #949586; PADDING-TOP: 20px; FONT-FAMILY: Arial, Helvetica, sans-serif" bgColor=#ffffff>' . $mensagem . '</BODY></HTML>';
            $mail->Body = $corpo;
            $mail->Subject = utf8_decode('Inscrição Curso Técnico Cenecista ' . $_POST['curso']);
            $mail->Send();
            $smarty->assign('cadastrou', true);
        endif;
    endif;
endif;
$smarty->assign('inscrever', $inscrever);
$smarty->display('curso-tecnico_inscricao.tpl');

