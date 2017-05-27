<?php
$smarty->assign('title', 'Inscrição para o curso de Produção Audio Visual com Ênfase em Documentários');
extract($_POST);
if(isset($nome)) {
    require_once('../classes/phpmailer.class.php');
    $nome = utf8_decode($nome);
    $observacao = nl2br($observacao);
    $mail = new PHPMailer(true);
    try {
        $mail->IsSMTP();
        $mail->Host = "179.96.225.9";
        $mail->SMTPAuth = true;
        $mail->Port = 25;
        $mail->Username   = "site";
        $mail->Password   = "st13f5";

        $mail->IsHTML(true);
        $mail->SetLanguage("br");
        $mail->From = 'site@cnecbento.com.br';
        $mail->FromName = 'Complexo Cenecista';
        $mail->AddReplyTo($email, $nome);
        //$mail->AddAddress('secretaria@cnecbento.com.br', 'Secretaria Complexo Cenecista');
        $mail->AddAddress('comunicacao@cnecbento.com.br', 'Comunicação Complexo Cenecista');
        $mail->AddAddress('publicidade@cnecbento.com.br', 'Publicidade e Propaganda Cenecista');
        //$mail->AddAddress('fernando@ween.com.br', 'Fernando Henrique');

        $smarty->assign('nome', $nome);
        $smarty->assign('sexo', $sexo);
        $smarty->assign('nascimento', $nascimento);
        $smarty->assign('rg', $rg);
        $smarty->assign('cpf', $cpf);
        $smarty->assign('endereco', $endereco);
        $smarty->assign('numero', $numero);
        $smarty->assign('complemento', $complemento);
        $smarty->assign('cidade', $cidade);
        $smarty->assign('uf', $uf);
        $smarty->assign('foneRes', $foneRes);
        $smarty->assign('foneCom', $foneCom);
        $smarty->assign('celular', $celular);
        $smarty->assign('email', $email);
        $smarty->assign('escolaridade', $escolaridade);
        $smarty->assign('curso', $curso);
        $smarty->assign('instituicao', $instituicao);
        $smarty->assign('profissao', $profissao);
        $smarty->assign('experiencia', $experiencia);
        $smarty->assign('sabendo', $sabendo);
        $smarty->assign('pagamento', $pagamento);
        $smarty->assign('observacao', $observacao);

        $corpo = $smarty->fetch('email/inscricao_producao.tpl');
        $mail->Body = utf8_decode($corpo);
        $mail->Subject = utf8_decode('Inscrição para o curso de Produção Audiovisual');
        if($mail->Send()) {
            $smarty->assign('temp_msg','Inscrição enviada com sucesso, em breve entraremos em contato!');
        }else {
            $smarty->assign('temp_msg','Falha ao enviar o e-mail!');
        }
    }catch (phpmailerException $e) {
        $smarty->assign('temp_msg',$e->errorMessage()); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
        $smarty->assign('temp_msg',$e->getMessage()); //Boring error messages from anything else!
    }
}
$smarty->display('inscricao_producao_audiovisual.tpl');