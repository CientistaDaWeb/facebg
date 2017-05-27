<?php

$arquivo = '../arquivos/faculdade/horario_rematriculas.csv';
if (is_file($arquivo)) {
    $fp = fopen($arquivo, "r");
    $size = filesize($arquivo) + 1;
    while (($dados = fgetcsv($fp, $size, ";")) !== FALSE) {
        if ($dados[1] == $_GET['matricula']) {
            $rematricula['data'] = utf8_encode($dados[5]);
            $rematricula['horario'] = utf8_encode($dados[6]);
            continue;
        }
    }
    fclose($fp);
    if (isset($rematricula)):
        echo '<h3>Data: ' . $rematricula['data'] . ' - ' . $rematricula['horario'] . '</h3>';
    else:
        echo '<h3>Matrícula não encontrada!</h3>';
    endif;
}
?>
