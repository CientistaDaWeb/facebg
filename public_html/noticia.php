<?php
$categoria = $baseURL[2];
$slug = $baseURL[3];
require_once('../classes/noticias.class.php');
$noticias = new noticias();

$noticia = $noticias->busca($setor, $categoria, $slug);
$smarty->assign('noticia', $noticia);

$fotos = $noticias->fotos($noticia['id_noticia']);
$smarty->assign('fotos', $fotos);

$arquivos = $noticias->arquivos($noticia['id_noticia']);
$smarty->assign('arquivos', $arquivos);

$relacionadas = $noticias->relacionadas($setor, $categoria, $slug);
$smarty->assign('relacionadas', $relacionadas);

$smarty->display('../../templates/noticia.tpl');