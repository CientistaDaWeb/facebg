<?php

if ($baseURL[2]) {
    if (is_file('../cnecvirtual_' . $baseURL[2] . '.php')) {
        require_once('../cnecvirtual_' . $baseURL[2] . '.php');
    } else {
        require_once('404.php');
    }
} else {
    require_once('../classes/alunos.class.php');
    $matricula = $_POST['matricula'];
    $senha = $_POST['senha'];
    if (!isset($_POST['solicitacao'])):
        $smarty->assign('msg', 'Você precisa estar logado para acessar essa página!');
        if ($matricula && $senha) :
            $smarty->assign('msg', 'Dados de acesso incorretos!');
            $aluno = new Alunos();
            $aluno->matricula = $matricula;
            $aluno->senha = $senha;
            $aluno->loga($setor);
        endif;
    else:
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
        $mail->AddAddress('secretaria@cnecbento.com.br', 'Secretaria Complexo Cenecista');
        //$mail->AddAddress('fernando@webscientist.com.br', 'Fernando Henrique');

        $mensagem = utf8_decode("Nova solicitação de documento.<br /><br />
                <b>Nome:</b> " . $_POST['solicitacao_nome'] . " <br>
                <b>Matricula:</b> " . $_POST['solicitacao_matricula'] . " <br>
                <b>Documento:</b> " . $_POST['solicitacao_documento'] . " <br>
                Atenciosamente,<br>
                Complexo Cenecista");
        $corpo = '<HTML><BODY style="PADDING-RIGHT: 0px; PADDING-LEFT: 0px; FONT-SIZE: 14px; PADDING-BOTTOM: 0px; MARGIN: 0px; COLOR: #949586; FONT-FAMILY: Arial, Helvetica, sans-serif" bgColor=#ffffff>' . $mensagem . '</BODY></HTML>';
        $mail->Body = $corpo;
        $mail->Subject = utf8_decode('Solicitação de Documento');
        if ($mail->Send()) {
            $smarty->assign('alert_msg', 'Solicitação enviada com sucesso!');
        } else {
            $smarty->assign('alert_msg', 'Erro ao enviar sua solicitação!');
        }
    endif;
    if ($_SESSION['matricula']) {
        $aluno = new Alunos();
        $password = $_POST['password'];
        if ($password) {
            require_once('../classes/phpmailer.class.php');
            $enviaEmail = $aluno->enviaSenha($setor, $_SESSION['matricula'], $_SESSION['email'], $password);
            if ($enviaEmail) {
                $smarty->assign('alert_msg', $enviaEmail);
            } else {
                $smarty->assign('alert_msg', 'Erro ao trocar a senha!');
            }
        }
        $email = $_POST['email'];
        if ($email) {
            $smarty->assign('alert_msg', $aluno->mudaEmail($email));
        }
        $arquivo = '../arquivos/faculdade/rematriculas.csv';
        if (is_file($arquivo)) {
            $fp = fopen($arquivo, "r");
            while (($dados = fgetcsv($fp, 0, ";")) !== FALSE) {
                if ($dados[0] == $_SESSION['matricula']) {
                    $rematricula['data'] = utf8_encode($dados[3]);
                    $rematricula['horario'] = utf8_encode($dados[4]);
                    $smarty->assign('rematricula', $rematricula);
                }
            }
            fclose($fp);
        }
        if (!$rematricula) {
            $arquivo = '../arquivos/faculdade/orientacao_rematricula.csv';
            if (is_file($arquivo)) {
                $fp = fopen($arquivo, "r");
                while (($dados = fgetcsv($fp, 0, ";")) !== FALSE) {
                    if ($dados[0] == $_SESSION['matricula']) {
                        $orientacao['data'] = utf8_encode($dados[3]);
                        $orientacao['horario'] = utf8_encode($dados[4]);
                        $orientacao['curso'] = $dados[2];
                    }
                }
                fclose($fp);
                $smarty->assign('orientacao', $orientacao);
            }
        }

        $arquivo = realpath('../arquivos/faculdade/matriculas/M' . $_SESSION['matricula'] . '.PDF');
        if (is_file($arquivo)):
            $smarty->assign('temMatricula', true);
        endif;

        $arquivo = realpath('../arquivos/faculdade/requerimento/' . $_SESSION['matricula'] . '.PDF');
        if (is_file($arquivo)):
            $smarty->assign('temRequerimento', true);
        endif;

        $arquivo = realpath('../arquivos/faculdade/boletins/' . $_SESSION['matricula'] . '.PDF');
        if (is_file($arquivo)):
            $smarty->assign('temBoletim', true);
        endif;

        $arquivo = realpath('../arquivos/faculdade/boletos/B' . $_SESSION['matricula'] . '.PDF');
        if (is_file($arquivo)):
            $smarty->assign('temBoleto', true);
        endif;

        $arquivo = realpath('../arquivos/faculdade/fotos/' . $_SESSION['matricula'] . '.jpg');
        if (is_file($arquivo)):
            $smarty->assign('temFoto', true);
        endif;

        $smarty->assign('boletim', $aluno->boletim($_SESSION['matricula'], $setor));
        $smarty->assign('matricula', $aluno->matricula($_SESSION['matricula'], $setor));
        $smarty->assign('title', 'Cnecvirtual');

        if ($_SESSION['ativo'] == 'S'):
            $smarty->assign('ativo', true);
        endif;

        $smarty->assign('contrato_geral', true);
        $smarty->assign('contrato_50', true);
        $smarty->assign('contrato_100', true);

        // Histórico de matérias cursadas
        $cursadas = $aluno->historico($_SESSION['matricula'], $setor, 'Cursada');
        $smarty->assign('cursadas', $cursadas);

        // Histórico de matérias não cursadas
        $ncursadas = $aluno->historico($_SESSION['matricula'], $setor, 'Não Cursada');
        $smarty->assign('ncursadas', $ncursadas);

        // Histórico de matérias aproveitadas
        $aproveitadas = $aluno->historico($_SESSION['matricula'], $setor, 'Aproveitada');
        $smarty->assign('aproveitadas', $aproveitadas);

        // Histórico de matérias não cursadas
        $matriculadas = $aluno->historico($_SESSION['matricula'], $setor, 'Matriculado');
        $smarty->assign('matriculadas', $matriculadas);

        $smarty->display('../../templates/cnecvirtual.tpl');

    } else {
        $smarty->assign('title', 'Erro');
        $smarty->display('../../templates/cnecvirtual_erro.tpl');
    }
}