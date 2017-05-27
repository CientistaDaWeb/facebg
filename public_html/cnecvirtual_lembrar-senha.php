<?php
$smarty->assign('title', 'Cnecvirtual - Lembrar Senha');

$matricula = $_POST['matricula'];
$email = $_POST['email'];
if($matricula) {
    require_once('../classes/alunos.class.php');
//    require_once('../classes/phpmailer.class.php');
    $aluno = new alunos();
    /*
    $enviaEmail = $aluno->enviaSenha($setor, $matricula, $email);
    if($enviaEmail){
        $smarty->assign('alert_msg', $enviaEmail);
    }else{
        $smarty->assign('alert_msg', 'Dados incorretos!');
    }*/
    $novaSenha = $aluno->novaSenha($setor, $matricula, $email);
    if($novaSenha){
        $smarty->assign('alert_msg', 'Sua nova senha é: <b><i>'.$novaSenha.'</i></b>');
    }else{
        $smarty->assign('alert_msg', 'Dados incorretos!');
    }
}
$smarty->display('../../templates/cnecvirtual_lembrar-senha.tpl');