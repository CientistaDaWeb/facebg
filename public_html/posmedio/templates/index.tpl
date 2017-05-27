{?include file="header.tpl"?}
{?if $mostraAviso ?}
    <link rel="stylesheet" type="text/css" media="screen" href="{?$basePATH?}/_css/ui-lightness/jquery-ui-1.8.6.custom.css" />
    <script src="{?$basePATH?}/_js/jquery-ui-1.8.6.custom.min.js"></script>
    <div id="modal" title="Volta as Aulas" style="display: none;">
        <img src="/_img/banner/volta_aulas.jpg" alt="volta as Aulas"/>
    </div>
    <script>
        $(document).ready(function() {
            $("#modal").dialog({
                modal: true,
                height: 450,
                width: 430
            });
        });
    </script>
{?/if?}
{?if $listaCursos?}
<div id="div_cursos" class="box">
    <div class="titulo">
        <h2>Cursos</h2>
    </div>
    <div id="cursos">
        {?foreach from=$listaCursos item=cursos key=slug?}
        <div id="{?$slug?}">
            <h3>{?$cursos.dados.categoria?}</h3>
            <ul>
                {?foreach from=$cursos.cursos item=curso?}
                <li><a href="/curso/{?$cursos.dados.slug?}/{?$curso.slug?}">{?$curso.curso?}</a></li>
                {?/foreach?}
            </ul>
        </div>
        {?/foreach?}
    </div>
</div>
{?/if?}
<!--
<div class="box">
    <h3><a href="/inscricao" title="Inscrição Cursos Técnicos">Faça sua inscrição para os cursos técnicos</a></h3>
</div>
-->
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
<div id="div_instituicao" class="box">
    <div class="titulo">
        <h2>A Instituição</h2>
    </div>
    <img src="{?$basePATH?}/_img/pos-medio/instituicao2.jpg" alt="Pós Médio Cenecista" />
    <div class="box-divisao">
        <p>
            É uma Instituição comprometida com a comunidade, com as mudanças e a formação de novos profissionais que necessitam entre outras coisas, de velocidade na tomada de decisões, de capacidade para se relacionar, e de visão para enxergar além de seus limites.
        </p>
        </div>
</div>
{?include file="footer.tpl"?}