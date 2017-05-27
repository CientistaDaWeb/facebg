<?php
class banners {
    var $id_banner, $id_setor, $titulo, $banner, $largura, $altura, $transparente, $slug;

    function __construct() {}

    function lista($setor) {
        $con = new database();
        $query = 'SELECT b.* FROM banners b, setors s
                WHERE b.id_setor = s.id_setor
                AND s.slug = "'.$setor.'"';
        $itens = $con->query($query);
        if($itens && $itens->num_rows > 0) {
            while($item = $itens->fetch_assoc()) {
               $retorno[] = $item;
            }
            return $retorno;
        }
    }

    function __destruct() {}
}