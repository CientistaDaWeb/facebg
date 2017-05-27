<?php

require_once('includes/config.php');
require_once('includes/menu.php');
if (!$baseURL[1]) {
    require_once('../classes/noticias.class.php');
    $not = new noticias();
    $noticias = $not->listaNoticiasDestaques($setor);
    $avisos = $not->listaAvisosDestaques($setor);
    if (isset($_SESSION['mostraAviso'])) {
        $_SESSION['mostraAviso'] = false;
    } else {
        $_SESSION['mostraAviso'] = true;
    }
    $_SESSION['mostraAviso'] = false;

    if (isset($_SESSION['mostraMatricula'])) {
        $_SESSION['mostraMatricula'] = false;
    } else {
        $_SESSION['mostraMatricula'] = true;
    }
    $_SESSION['mostraMatricula'] = false;

    if (isset($_SESSION['mostraSala'])) {
        $_SESSION['mostraSala'] = false;
    } else {
        $_SESSION['mostraSala'] = true;
    }
    $_SESSION['mostraSala'] = false;

    if (isset($_SESSION['mostraOrientacao'])) {
        $_SESSION['mostraOrientacao'] = false;
    } else {
        $_SESSION['mostraOrientacao'] = true;
    }
    $_SESSION['mostraOrientacao'] = false;

    $smarty->assign('mostraAviso', $_SESSION['mostraAviso']);
    $smarty->assign('mostraMatricula', $_SESSION['mostraMatricula']);
    $smarty->assign('mostraSala', $_SESSION['mostraSala']);
    $smarty->assign('mostraOrientacao', $_SESSION['mostraOrientacao']);
    $smarty->assign('noticias', $noticias);
    $smarty->assign('avisos', $avisos);
    $smarty->assign('title', 'Bem Vindo');
    $smarty->display('index.tpl');
} else {
    if (is_file($baseURL[1] . '.php')) {
        require_once($baseURL[1] . '.php');
    } else {
        require_once('../404.php');
    }
}