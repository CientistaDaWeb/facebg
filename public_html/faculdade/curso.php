<?php

$dados = $_POST;
$smarty->assign('dados', $dados);
if (!empty($dados['nome'])):
    require_once('../classes/posgraduacao_inscricao.class.php');
    $inscricao = new posgraduacao_inscricao();
    $id = $inscricao->inscrever($dados);
    if (!empty($id)) :
        $smarty->assign('mostra', false);
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
            $mail->From = $dados['email'];
            $mail->FromName = $dados['nome'];
            $mail->AddAddress('secretaria@cnecbento.com.br', 'Secretaria Complexo Cenecista');
            $mail->AddAddress('posgraduacao@cnecbento.com.br', 'Pós Graduação Cenecista');

            if (!empty($dados['curso_email'])):
                $emails = explode(';', $dados['curso_email']);
                foreach ($emails AS $email):
                    $mail->AddAddress($email, 'Cenecista');
                endforeach;
            endif;
            //$mail->AddAddress('fernando@webscientist.com.br', 'Fernando Henrique');
            $corpo = $smarty->fetch('email/inscricao_pos.tpl');
            $mail->Body = utf8_decode($corpo);
            $mail->Subject = utf8_decode('Nova matrícula para um curso de Pós Graduação [' . $dados['nome'] . ']');
            $mail->Send();
            $smarty->assign('retorno', 'Inscrição feita com sucesso!');
        } catch (phpmailerException $e) {
            $smarty->assign('temp_msg', $e->errorMessage());
        } catch (Exception $e) {
            $smarty->assign('temp_msg', $e->getMessage());
        }
    else:
        $smarty->assign('retorno', 'Erro ao fazer a inscrição!');
    endif;
endif;
require_once('../curso.php');
