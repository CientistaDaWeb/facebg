<?php

require_once('../classes/cursos.class.php');
$categoria = $baseURL[2];
$slug = $baseURL[3];
$cursos = new cursos();

$curso = $cursos->busca($categoria, $slug, $setor);
$smarty->assign('curso', $curso);

$arquivos = $cursos->arquivos($curso['id_curso']);
$smarty->assign('arquivos', $arquivos);

$arquivos = $cursos->arquivosPrivados($curso['id_curso']);
$smarty->assign('arquivosPrivados', $arquivos);

$fotos = $cursos->fotos($curso['id_curso']);
$smarty->assign('fotos', $fotos);

if ($_POST['usuario'] && $_POST['senha']):
    $login = $cursos->loginPrivado($curso['id_curso'], $_POST['usuario'], $_POST['senha']);
    $smarty->assign('logadoPrivado', $login);
endif;

$cursos = $cursos->lista($categoria, $slug, $setor);
$smarty->assign('cursos', $cursos);
$smarty->display('../../templates/curso.tpl');