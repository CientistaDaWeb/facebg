{?include file="header.tpl"?}
<div id="lista-noticias" class="box">
    <div class="titulo">
        <h2>Notícias</h2>
    </div>
    {?foreach from=$noticias item=noticia?}
    <div class="noticia box-divisao">
        {?if $noticia.imagem ?}
        <div class="thumb">
            <img src="http://images.serverws.com.br/cnecbento.com.br/noticias/thumbs/{?$noticia.imagem?}" alt="{?$noticia.titulo?}" />
        </div>
        {?/if?}
        <p class="data">{?$noticia.data|date_format:"%d/%m/%Y"?}</p>
        <h3><a href="/noticia/{?$noticia.cslug?}/{?$noticia.slug?}" title="{?$noticia.titulo?}">{?$noticia.titulo?}</a></h3>
    </div>
    {?/foreach?}
</div>
<div class="paginacao box">
    {?section name=pagina start=1 loop=$paginas+1 step=1 ?}
        <a href="/noticias/{?$smarty.section.pagina.index?}" {?if $smarty.section.pagina.index == $pag?}class="selecionado"{?/if?}>{?$smarty.section.pagina.index?}</a>
    {?/section?}
</div>
{?include file="footer.tpl"?}