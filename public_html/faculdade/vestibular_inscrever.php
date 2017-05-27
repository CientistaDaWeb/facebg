<?php

if ($inscricoesAbertas) {
    if ($_POST['nome']) {
        $_POST['nascimento'] = ajustadata($_POST['nascimento'], 'banco');
        $_POST['dataEmissao'] = ajustadata($_POST['dataEmissao'], 'banco');
        $_POST['indicado_nome'] = $_POST['codigoPromocional'];
        $id = $vestibular->inscrever($_POST, $inscricoesAbertas['id_vestibulare']);
        if ($id) {
            if ($hoje <= $inscricoesAbertas['data_promocional']) {
                $valor = $inscricoesAbertas['valor_promocional'];
            } else {
                $valor = $inscricoesAbertas['valor'];
            }

            $codigos = array(
                'wswsws',
            );

            $codigos2 = array(
                'wswsws',
            );

            if (in_array(strtolower($_POST['codigoPromocional']), $codigos)):
                $valor = $valor / 2;
            elseif (in_array(strtolower($_POST['codigoPromocional']), $codigos2)):
                $valor = 0;
            endif;

            $boleto = cripfy($vestibular->gera_boleto($nosso_numero, $inscricoesAbertas, $id, $valor), 'c3n3cv1r7');

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
            $mail->From = 'secretaria@cnecbento.com.br';
            $mail->FromName = utf8_decode('Secretaria Complexo Cenecista');
            $mail->AddAddress($email, $nome);
            $mensagem = utf8_decode('Olá ' . $nome . ', <br><br>
                Sua inscrição no Vestibular Cenecista ' . $inscricoesAbertas['ano'] . '/' . $inscricoesAbertas['semestre'] . ' foi efetuada com sucesso<br><br>
                Para imprimir o boleto acesse o seguinte link <a href="http://faculdade.cnecbento.com.br/vestibular/boleto/' . $boleto . '">http://faculdade.cnecbento.com.br/vestibular/boleto/' . $boleto . '</a><br>
                Ou copie esse link http://faculdade.cnecbento.com.br/vestibular/boleto/' . $boleto . ' e cole no seu navegador de preferência<br><br><br>' .
                    //'Leia o nosso <a href="http://faculdade.cnecbento.com.br/arquivos/MANUAL_DO_CANDIDATO_2013_1.pdf">"Manual do Candidato"</a><br><br>' .
                    'Atenciosamente,<br>Complexo Cenecista');
            $corpo = '<HTML><BODY style="PADDING-RIGHT: 0px; PADDING-LEFT: 0px; FONT-SIZE: 14px; PADDING-BOTTOM: 0px; MARGIN: 0px; COLOR: #949586; PADDING-TOP: 20px; FONT-FAMILY: Arial, Helvetica, sans-serif" bgColor=#ffffff>' . $mensagem . '</BODY></HTML>';
            $mail->Body = $corpo;
            $mail->Subject = utf8_decode('Inscrição Vestibular Cenecista ' . $inscricoesAbertas['ano'] . '/' . $inscricoesAbertas['semestre']);
            $mail->Send();
        }
        $smarty->assign('vestibular', $inscricoesAbertas);
        $smarty->assign('title', 'Vestibular - Inscrição Etapa 3');
        $smarty->display('vestibular_inscrever.tpl');
    }else {
        header('location: /vestibular/inscricao');
    }
} else {
    header('location: /vestibular/inscricao');
}