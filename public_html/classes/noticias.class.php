<?php
class noticias {
    var $id_noticia, $id_setor, $id_noticias_categoria, $titulo, $texto, $data, $imagem, $destaque, $slug;

    function __construct() {
    }
    function listaNoticiasDestaques($setor) {
        $con = new database();
        $query = 'SELECT n.titulo, n.data, n.imagem, n.slug, nc.slug AS cslug
                FROM noticias n, setors s, noticias_categorias nc
                WHERE nc.id_noticias_categoria = n.id_noticias_categoria
                AND s.slug = "'.$setor.'"
                AND n.id_setor = s.id_setor
                AND nc.categoria != "Aviso"
                AND n.destaque = 1
                AND n.data <= NOW()
                ORDER BY data DESC
                LIMIT 0, 3';
        $itens = $con->query($query);
        if($itens && $itens->num_rows > 0) {
            while($item = $itens->fetch_assoc()) {
                $dados[] = $item;
            }
            return $dados;
        }
    }
    function listaAvisosDestaques($setor) {
        $con = new database();
        $query = 'SELECT n.titulo, n.data, n.slug, nc.slug AS cslug
                FROM noticias n, setors s, noticias_categorias nc
                WHERE n.id_setor = s.id_setor
                ANd nc.id_noticias_categoria = n.id_noticias_categoria
                AND s.slug = "'.$setor.'"
                AND nc.categoria = "Aviso"
                AND n.destaque = 1
                AND n.data <= NOW()
                ORDER BY data DESC
                LIMIT 0, 4';
        $itens = $con->query($query);
        if($itens && $itens->num_rows > 0) {
            while($item = $itens->fetch_assoc()) {
                $dados[] = $item;
            }
            return $dados;
        }
    }

    function pegaPaginas($setor) {
        $con = new database();
        $query = 'SELECT count(n.id_noticia) as total
                    FROM noticias n, setors s
                    WHERE n.id_setor = s.id_setor
                    AND s.slug = "'.$setor.'"';
        $itens = $con->query($query);
        if($itens && $itens->num_rows > 0) {
            $item = $itens->fetch_assoc();
            $total = ceil($item['total']/10);
            return $total;
        }
    }
    function lista($setor, $pagina) {
        $inicio = ($pagina-1)*10;
        $con = new database();
        $query = 'SELECT n.titulo, n.imagem, n.slug, nc.slug AS cslug, n.data
                    FROM noticias n, setors s, noticias_categorias nc
                    WHERE n.id_setor = s.id_setor
                    AND n.id_noticias_categoria = nc.id_noticias_categoria
                    AND n.data <= NOW()
                    AND s.slug = "'.$setor.'"
                    ORDER BY data DESC
                    LIMIT '.$inicio.',10';
        $itens = $con->query($query);
        if($itens && $itens->num_rows > 0) {
            while($item = $itens->fetch_assoc()) {
                $dados[] = $item;
            }
            return $dados;
        }
    }
    function busca($setor, $categoria, $noticia) {
        $con = new database();
        $query = 'SELECT n.*, nc.slug AS cslug, nc.categoria
	    	FROM noticias n, setors s, noticias_categorias nc
	    	WHERE n.id_setor = s.id_setor
	    	ANd nc.id_noticias_categoria = n.id_noticias_categoria
                AND n.data <= NOW()
	    	AND s.slug = "'.$setor.'"
	    	AND nc.slug = "'.$categoria.'"
	    	AND n.slug = "'.$noticia.'"
	    	';
        $itens = $con->query($query);
        if($itens && $itens->num_rows > 0) {
            $dados = $itens->fetch_assoc();
            return $dados;
        }
    }
    function relacionadas($setor, $categoria, $noticia) {
        $con = new database();
        $query = 'SELECT n.titulo, n.data, n.imagem, n.slug, nc.slug AS cslug
	    	FROM noticias n, setors s, noticias_categorias nc
	    	WHERE n.id_setor = s.id_setor
	    	ANd nc.id_noticias_categoria = n.id_noticias_categoria
	    	AND s.slug = "'.$setor.'"
	    	AND nc.slug = "'.$categoria.'"
	    	AND n.slug != "'.$noticia.'"
                AND n.data <= NOW()
	    	ORDER BY data DESC
	    	LIMIT 0, 4';
        $itens = $con->query($query);
        if($itens && $itens->num_rows > 0) {
            while($item = $itens->fetch_assoc()) {
                $dados[] = $item;
            }
            return $dados;
        }
    }
    function fotos($id_noticia) {
        $con = new database();
        $query = 'SELECT * FROM noticias_fotos WHERE id_noticia = '.$id_noticia;
        $itens = $con->query($query);
        if($itens && $itens->num_rows > 0) {
            while($item = $itens->fetch_assoc()) {
                $dados[] = $item;
            }
            return $dados;
        }
    }
    function __destruct() {
    }

    function arquivos($id_noticia) {
        $con = new database();
        $query = 'SELECT * FROM noticias_arquivos WHERE id_noticia='.$id_noticia;
        $itens = $con->query($query);
        if($itens && $itens->num_rows > 0) {
            while($item = $itens->fetch_assoc()) {
                $retorno[] = $item;
            }
            return $retorno;
        }
    }
}
?>
