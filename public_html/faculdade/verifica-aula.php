<?php

$arquivo = '../arquivos/faculdade/salas.csv';
if (is_file($arquivo)) {
    $fp = fopen($arquivo, "r");
    while (($dados = fgetcsv($fp, 0, ";")) !== FALSE) {
        if (str_replace('.', '', $dados[0]) == $_GET['matricula']) {
            $data = NULL;
            $data['disciplina'] = utf8_encode($dados[3]);
            $data['hora'] = utf8_encode($dados[4]);
            $data['sala'] = utf8_encode($dados[5]);
            $retorno[] = $data;
        }
    }
    fclose($fp);
    if (isset($retorno)):
        $resposta = '';
        foreach ($retorno AS $item):
            $resposta .= '<h3>' . $item['disciplina'] . '</h3><p>Sala: ' . $item['sala'] . ' - ' . $item['hora'] . '</p>';
        endforeach;
        echo $resposta;
    else:
        echo '<h3>Sala não encontrada!</h3>';
    endif;
}
?>
