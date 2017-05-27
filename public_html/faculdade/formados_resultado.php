<?php
include('../classes/functions.php');
header('Content-Type: text/html; charset=utf-8');

$ano = $_POST['ano'];
$curso = $_POST['curso'];

$smarty->assign('ano', $ano);
$smarty->assign('curso', $curso);

if (is_file('arquivos/formados/' . $curso . '_' . $ano . '.jpg')):
    $smarty->assign('foto', 'arquivos/formados/' . $curso . '_' . $ano . '.jpg');
endif;

$arquivo = 'arquivos/formados/formados.csv';
if (is_file($arquivo)) :
    $fp = fopen($arquivo, "r");
    while (($dados = fgetcsv($fp, 0, ";")) !== FALSE) :
        if ($dados[3] == $curso && $dados[5] == $ano):
            $formados[] = $dados[1];
        endif;
    endwhile;
    $smarty->assign('formados', $formados);
endif;
$smarty->display('formados_resultado.tpl');




