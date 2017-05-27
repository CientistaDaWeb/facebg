<?php
$con = new database();

extract($_POST);
if($cpf && $email) {
    $confirmacao = $vestibular->confirmacao_inscricao($cpf, $email);
    if($confirmacao['tipo'] == 'erro') {
        $smarty->assign('alerta', $confirmacao['msg']);
    }else {
        $confirmacao['id'] = cripfy($confirmacao['id'], 'c3n3cv1r7');
        $smarty->assign('confirmacao', $confirmacao);
    }
}
$smarty->assign('title', 'Vestibular - Confirmação de Inscrição');
$smarty->display('vestibular_confirmacao.tpl');