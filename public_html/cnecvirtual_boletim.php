<?php
$matricula = $baseURL[3];
$matri = $_SESSION['matricula'];
if($matricula == $matri) {
    $arquivo = realpath('../arquivos/'.$setor.'/boletins/'.$matricula.'.PDF');
    if(is_file($arquivo)) {
        header ("Content-Disposition: attachment; filename=".$matricula.".PDF");
        header ("Content-Type: application/pdf");
        header ("Content-Length: ".filesize($arquivo));
        readfile($arquivo);
    }else {
        $smarty->assign('msg', 'Arquivo não encontrado!');
        $smarty->assign('title', 'Erro');
        $smarty->display('../../templates/cnecvirtual_erro.tpl');
    }
}else {
    $smarty->assign('msg', 'Você não tem permissão para acessar esse conteúdo!');
    $smarty->assign('title', 'Erro');
    $smarty->display('../../templates/cnecvirtual_erro.tpl');
}