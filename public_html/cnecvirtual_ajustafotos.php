<?php

require_once('../classes/alunos.class.php');
$diretorio = '../arquivos/faculdade/fotos/';
$arquivos = opendir($diretorio);
$Aluno = new alunos();
while ($item = readdir($arquivos)) :
    $foto = explode('.', $item);
    if ($foto[0] != ''):
        if ($Aluno->verificaMatricula($setor, $foto[0])):
            echo $foto[0] . '<br />';
            if ($foto[1] == 'bmp'):
                rename($diretorio . $item, $diretorio . $foto[0] . '.jpg');
            endif;
        else:
            unlink($diretorio . $item);
        endif;
    endif;
endwhile;
