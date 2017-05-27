{?include file="header.tpl"?}
{?if $fotos?}
<link type="text/css" href="{?$basePATH?}/_css/prettyPhoto.css" rel="stylesheet" />
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.prettyPhoto.js">
</script>
<link type="text/css" href="{?$basePATH?}/_css/jquery.jcarousel.css" rel="stylesheet" />
<link type="text/css" href="{?$basePATH?}/_css/_img/tango/skin.css" rel="stylesheet" />
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.jcarousel.pack.js">
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#fotos").jcarousel({
            scroll: 3,
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
{?/if?}
{?if $noticia?}
<div class="box">
    <div class="titulo">
        <h2>{?$noticia.categoria?}</h2>
    </div>
    <div id="noticia" class="box-interna">
        <h3>{?$noticia.titulo?}</h3>
        <p class="data">{?$noticia.data|date_format:"%d/%m/%Y"?}</p>
        {?if $noticia.imagem?}
         <img src="http://images.serverws.com.br/cnecbento.com.br/noticias/thumbs/{?$noticia.imagem?}" class="thumb" alt="{?$noticia.titulo?}" />
        {?/if?}
        {?$noticia.texto?}
    </div>
    {?if $fotos?}
    <div>
        <div class="titulo">
            <h2>Galeria de Fotos</h2>
        </div>
        <ul id="fotos" class="jcarousel-skin-tango">
            {?foreach from=$fotos item=foto?}
            <li>
                <a href="http://images.serverws.com.br/cnecbento.com.br/noticias/galeria/{?$foto.imagem?}" title="{?$foto.legenda?}" rel="prettyPhoto[noticia]">
                    <img src="http://images.serverws.com.br/cnecbento.com.br/noticias/galeria/thumbs/{?$foto.imagem?}" alt="{?$foto.legenda?}" />
                </a>
            </li>
            {?/foreach?}
        </ul>
        <p class="instrucoes">
            * Clique nas imagens para ampliar!
        </p>
    </div>
    {?/if?}
    {?if $arquivos?}
    <div class="box-divisao arquivos">
        <h3>| Arquivos para download |</h3>
        {?foreach from=$arquivos item=arquivo?}
        <a href="http://docs.serverws.com.br/cnecbento.com.br/noticias/{?$arquivo.arquivo?}" target="_blank" title="{?$arquivo.legenda?}">{?$arquivo.legenda?}</a>
        {?/foreach?}
    </div>
    {?/if?}
</div>
<div id="lista-noticias" class="box">
    <div class="titulo">
        <h2>| Outras Notícias |</h2>
    </div>
    {?foreach from=$relacionadas item=noticia?}
    <div class="noticia box-interna">
        {?if $noticia.imagem?}
        <img src="http://images.serverws.com.br/cnecbento.com.br/noticias/thumbs/{?$noticia.imagem?}" alt="{?$noticia.titulo?}" />
        {?/if?}
        <p class="data">{?$noticia.data|date_format:"%d/%m/%Y"?}</p>
        <h3><a href="/noticia/{?$noticia.cslug?}/{?$noticia.slug?}" title="{?$noticia.titulo?}">{?$noticia.titulo?}</a></h3>
    </div>
    {?foreachelse?}
    <p>
        Não tem noticias relacionadas!
    </p>
    {?/foreach?}
</div>
{?else?}
<div class="box">
    <p class="erro">
        Notícia não encontrada!
    </p>
</div>
{?/if?}
{?include file="footer.tpl"?}
