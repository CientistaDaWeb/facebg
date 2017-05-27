<?php

class cursos {

    public $id_curso, $id_cursos_categoria, $curso, $descricao, $slug, $usuario, $senha, $orientador, $email_orientador, $mostra_matricula;

    function __construct() {

    }

    function busca($categoria, $curso, $setor) {
        $con = new database();
        $query = 'SELECT c.*, cc.categoria FROM cursos c, cursos_categorias cc
		WHERE cc.id_cursos_categoria = c.id_cursos_categoria
		AND c.slug = "' . $curso . '"
		AND cc.slug = "' . $categoria . '"
		';
        $item = $con->query($query);
        if ($item && $item->num_rows > 0) {
            $retorno = $item->fetch_assoc();
            return $retorno;
        }
    }

    function arquivos($id_curso) {
        $con = new database();
        $query = 'SELECT * FROM cursos_arquivos WHERE id_curso = ' . $id_curso;
        $itens = $con->query($query);
        if ($itens && $itens->num_rows > 0) {
            while ($item = $itens->fetch_assoc()) {
                $retorno[] = $item;
            }
            return $retorno;
        }
    }

    function arquivosPrivados($id_curso) {
        $con = new database();
        $query = 'SELECT * FROM cursos_arquivos_privados WHERE id_curso = ' . $id_curso;
        $itens = $con->query($query);
        if ($itens && $itens->num_rows > 0) {
            while ($item = $itens->fetch_assoc()) {
                $retorno[] = $item;
            }
            return $retorno;
        }
    }

    function loginPrivado($id_curso, $usuario, $senha) {
        $con = new database();
        $query = 'SELECT * FROM cursos WHERE id_curso = ' . $id_curso . ' AND usuario = "' . $usuario . '" AND senha = "' . $senha . '"';
        $itens = $con->query($query);
        if ($itens && $itens->num_rows > 0) {
            return true;
        }
    }

    function fotos($id_curso) {
        $con = new database();
        $query = 'SELECT * FROM cursos_fotos WHERE id_curso = ' . $id_curso;
        $itens = $con->query($query);
        if ($itens && $itens->num_rows > 0) {
            while ($item = $itens->fetch_assoc()) {
                $retorno[] = $item;
            }
            return $retorno;
        }
    }

    function lista($categoria, $curso, $setor) {
        $con = new database();
        $query = 'SELECT c.curso, c.slug, cc.slug AS cslug FROM cursos c, cursos_categorias cc
		WHERE cc.id_cursos_categoria = c.id_cursos_categoria
		AND c.slug != "' . $curso . '"
		AND cc.slug = "' . $categoria . '"';
        $itens = $con->query($query);
        if ($itens && $itens->num_rows > 0) {
            while ($item = $itens->fetch_assoc()) {
                $retorno[] = $item;
            }
            return $retorno;
        }
    }

    function listaMenu($setor) {
        $con = new database();
        $query = 'SELECT c.curso, c.slug, cc.slug AS cslug, cc.categoria FROM cursos c, cursos_categorias cc, setors s
                WHERE cc.id_cursos_categoria = c.id_cursos_categoria
                AND cc.id_setor = s.id_setor
                AND s.slug = "' . $setor . '"
                ORDER BY cc.id_cursos_categoria, c.curso';
        $itens = $con->query($query);
        if ($itens && $itens->num_rows > 0) {
            while ($item = $itens->fetch_assoc()) {
                if ($item['categoria'] != 'Inativos'):
                    $cursoc['categoria'] = $item['categoria'];
                    $cursoc['slug'] = $item['cslug'];

                    $curso['slug'] = $item['slug'];
                    $curso['curso'] = $item['curso'];

                    $retorno[$item['cslug']]['dados'] = $cursoc;
                    $retorno[$item['cslug']]['cursos'][] = $curso;
                endif;
            }
            return $retorno;
        }
    }

    function __destruct() {

    }

}
