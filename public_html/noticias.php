<?php
$pagina = $baseURL[2];
$smarty->assign('pag', $pagina);

require_once('../classes/noticias.class.php');
$noticias = new noticias();
if(!$pagina){
	$pagina = 1; 
}
$paginas = $noticias->pegaPaginas($setor);
$smarty->assign('paginas', $paginas);

$noticias = $noticias->lista($setor, $pagina);
$smarty->assign('noticias', $noticias);

$smarty->display('../../templates/noticias.tpl');