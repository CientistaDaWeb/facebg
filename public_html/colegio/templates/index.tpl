{?include file="header.tpl"?}
{?if $mostraAviso ?}
<link rel="stylesheet" type="text/css" media="screen" href="{?$basePATH?}/_css/ui-lightness/jquery-ui-1.8.6.custom.css" />
<script src="{?$basePATH?}/_js/jquery-ui-1.8.6.custom.min.js"></script>
<div id="modal" title="Volta as Aulas" style="display: none;">
    <a href="/bolsas-de-estudo">
        <img src="/_img/banner/bolsas.jpg" alt="volta as Aulas"/>
    </a>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#modal").dialog({
            modal: true,
            height: 265,
            width: 430
        });
    });
</script>
{?/if?}
<link type="text/css" href="{?$basePATH?}/_css/prettyPhoto.css" rel="stylesheet" />
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.prettyPhoto.js">
</script>
<link type="text/css" href="{?$basePATH?}/_css/jquery.jcarousel.css" rel="stylesheet" />
<link type="text/css" href="{?$basePATH?}/_css/_img/tango/skin.css" rel="stylesheet" />
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.jcarousel.pack.js">
</script>
<script type="text/javascript">
    $(function () {
        $(".galeria").jcarousel({
            scroll: 4,
            visible: 5
        });
        $("a[rel^='prettyPhoto']").prettyPhoto({
            counter_separator_label: " de ",
            theme: "facebook",
            slideshow: 5000,
            social_tools: ''
        });
    });
</script>
<div id="div_noticias-avisos" class="box">
    <div id="div_noticias">
        <div class="titulo">
            <h2>Notícias</h2>
        </div>
        <div id="noticias">
            {?foreach from=$noticias item=noticia?}
            <div class="noticia box-interna">
                {?if $noticia.imagem ?}
                <img src="http://images.serverws.com.br/cnecbento.com.br/noticias/thumbs/{?$noticia.imagem?}" alt="{?$noticia.titulo?}" />
                {?/if?}
                <p class="data">{?$noticia.data|date_format:"%d/%m/%Y"?}</p>
                <h3><a href="/noticia/{?$noticia.cslug?}/{?$noticia.slug?}" title="{?$noticia.titulo?}">{?$noticia.titulo?}</a></h3>
            </div>
            {?foreachelse?}
            <label class="error">Não tem notícias cadastradas!</label>
            {?/foreach?}
        </div>
    </div>
    <div id="div_avisos">
        <div class="titulo">
            <h2>Avisos</h2>
        </div>
        <div id="avisos">
            {?foreach from=$avisos item=aviso?}
            <div class="aviso">
                <h3><span class="data">{?$aviso.data|date_format:"%d/%m/%Y"?} - </span>{?$aviso.titulo?}</h3>
                <a href="/noticia/{?$aviso.cslug?}/{?$aviso.slug?}">Continue lendo...</a>
            </div>
            {?foreachelse?}
            <label class="error">Não tem Avisos cadastrados!</label>
            {?/foreach?}
        </div>
    </div>
</div>
<div class="box">
    <div class="titulo">
        <h2>Fotos do Colégio Cenecista</h2>
    </div>
    <ul class="jcarousel-skin-tango galeria">
        {?foreach from=$fotosColegio item=foto?}
        <li>
            <a href="{?$basePATH?}/_img/colegio/galeria/gerais/{?$foto.imagem?}" title="{?$foto.legenda?}" rel="prettyPhoto[colegio]"><img src="{?$basePATH?}/_img/colegio/galeria/gerais/thumbs/{?$foto.imagem?}" alt="{?$foto.legenda?}" /></a>
        </li>
        {?/foreach?}
    </ul>
    <p class="instrucoes">
        * Clique nas imagens para ampliar!
    </p>
</div>
{?include file="footer.tpl"?}