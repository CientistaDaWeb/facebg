{?include file="header.tpl"?}
<link type="text/css" href="{?$basePATH?}/_css/prettyPhoto.css" rel="stylesheet" />
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.prettyPhoto.js">
</script>
<link type="text/css" href="{?$basePATH?}/_css/jquery.jcarousel.css" rel="stylesheet" />
<link type="text/css" href="{?$basePATH?}/_css/_img/tango/skin.css" rel="stylesheet" />
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.jcarousel.pack.js">
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".galeria").jcarousel({
            scroll: 4,
            visible: 5,
        });
        $(".galeria a").prettyPhoto({
            theme: "light_rounded",
            counter_separator_label: " de "
        });
    });
</script>
<div class="box">
    <div class="titulo">
        <h2>Educação para Jovens e Adultos - EJA</h2>
    </div>
    <p>Com o lema: “Ser, saber e fazer” Uma necessidade e uma prioridade, a EJA (Educação de Jovens e Adultos) é oferecida no colégio Cenecista São Roque. No período noturno, o curso dá oportunidade às pessoas que não tiveram acesso à educação básica em tempo normal.</p>
    <p>A idade mínima para ingresso no mesmo é de 18 anos.</p>
</div>
<!--
<div class="box">
  <div class="titulo">
        <h2>Fotos do EJA</h2>
    </div>
    <ul class="jcarousel-skin-tango galeria">
        {?foreach from=$fotosEJA item=foto?}
        <li>
            <a href="{?$basePATH?}/_img/colegio/galeria/gerais/{?$foto.imagem?}" title="{?$foto.legenda?}" rel="fotosEJA[]"><img src="{?$basePATH?}/_img/colegio/galeria/gerais/thumbs/{?$foto.imagem?}" alt="{?$foto.legenda?}" /></a>
        </li>
        {?/foreach?}
    </ul>
    <p class="instrucoes">
        * Clique nas imagens para ampliar!
    </p>
</div>
-->
{?include file="footer.tpl"?}