<?php

$arquivo = '../arquivos/faculdade/horario_orientacoes.csv';
if (is_file($arquivo)) {
    $fp = fopen($arquivo, "r");
    $size = filesize($arquivo) + 1;
    while (($dados = fgetcsv($fp, $size, ";"))) {
        $retorno[] = $dados;
        if ($dados[0] == $_GET['matricula']) {
            $rematricula['data'] = utf8_encode($dados[4]);
            $rematricula['horario'] = utf8_encode($dados[5]);
            continue;
        }
    }
    //echo '<div style="display:none">'.print_r($retorno).'</div>';
    fclose($fp);
    if (isset($rematricula)):
        echo '<h3>Data: ' . $rematricula['data'] . ' - ' . $rematricula['horario'] . '</h3>';
    else:
        echo '<h3>Matrícula não encontrada!</h3>';
    endif;
}
?>
