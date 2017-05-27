{?include file="header.tpl"?}
</div>
{?if $mostraAviso ?}
<div id="modal" title="Bolsas de Estudo" style="display: none;">
    <a href="/arquivos/Edital_Bolsa_de_Estudo_2015_3.pdf" target="_blank">
        <img src="/_img/banner/pop-up-prorrogacao.jpg" />
    </a>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#modal").dialog({
            modal: true,
            height: 450,
            width: 630
        });
    });
</script>
{?/if?}
<!--
<div id="modalOrientacao" title="Verificar dia da orientação da rematrícula" style="display: none;">
    <p>Digite a sua matrícula para verificar o horário!</p>
    <p><input type="text" name="orientacaoInpt" id="orientacaoInpt" /> <button id="buscaOrientacao" type="button">Verificar orientação de rematrícula</button></p>
    <div id="resultadoOrientacao"></div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#modalOrientacao").dialog({
            modal: true,
            height: 150,
{?if !$mostraOrientacao ?}
            autoOpen: false,
{?/if?}
            width: 500
        });
    });
</script>
<div id="modalMatricula" title="Verificar dia da matrícula" style="display: none;">
<p>Digite a sua matrícula para verificar o horário!</p>
<p><input type="text" name="matriculaInpt" id="matriculaInpt" /> <button id="buscaMatricula" type="button">Verificar matrícula</button></p>
<div id="resultadoMatricula"></div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $("#modalMatricula").dialog({
        modal: true,
        height: 150,
{?if !$mostraMatricula ?}
            autoOpen: false,
{?/if?}
            width: 500
        });
    });
</script>

<div id="modalAula" title="Verificar salas de aula" style="display: none;">
<p>Digite a sua matrícula para verificar os sala!</p>
<p><input type="text" name="matriculaInptAula" id="matriculaInptAula" /> <button id="buscaAula" type="button">Verificar Salas</button></p>
<div id="resultadoAula"></div>
</div>
<script type="text/javascript">
$(document).ready(function() {
$("#modalAula").dialog({
modal: true,
height: 450,
{?if !$mostraAula ?}
autoOpen: false,
{?/if?}
width: 500
});
});
</script>
-->
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
    <a href="/arquivos/CONTRATO_DE_PRESTACAO_DE_SERVICOS_2012.PDF"><h3>Contrato de Prestação de Serviços - 2012</h3></a>
</div>
<div class="box">
    <h3>Verifique o horário da sua orientação de rematrícula.</h3>
    <p><button id="abreOrientacao" type="button">Ver horário de orientação de rematrícula</button></p>
</div>
-->
<!--
<div class="box">
    <h3>Verifique o horário da sua matrícula.</h3>
    <p><button id="abreMatricula" type="button">Ver horário de matricula</button></p>
</div>

<div class="box">
    <h3>Verifique a sua grade de aulas.</h3>
    <p><button id="abreAula" type="button">Ver horário das aulas</button></p>
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
            <label class="error">Não há notícias cadastradas!</label>
            {?/foreach?}
        </div>
    </div>
    <div id="div_avisos">
        <!--
        <a href="/vestibular/sorteio-netbooks" title="Sorteio de Netbooks">
            <img src="/_img/vestibular/2011/4/promo_vest2_site-01.jpg" alt="Banner Sorteio de Netbooks" />
        </a>
        -->
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
            <label class="error">Não há Avisos cadastrados!</label>
            {?/foreach?}
        </div>
    </div>
</div>
<div id="div_instituicao" class="box">
    <div class="titulo">
        <h2>A Instituição</h2>
    </div>
    <img src="{?$basePATH?}/_img/faculdade/instituicao2.jpg" alt="Faculdade Cenecista" width="319" height="197" />
    <div class="box-divisao">
        <img src="{?$basePATH?}/_img/faculdade/logo_faculdade.gif" alt="Faculdade Cenecista" width="406" height="62" />
        <p>A Faculdade Cenecista de Bento Gonçalves é uma Instituição comprometida com a comunidade, com as mudanças e a formação de novos profissionais que necessitam entre outras coisas, de velocidade na tomada de decisões, de capacidade para se relacionar, e de visão para enxergar além de seus limites. </p>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        /*
         $('#abreMatricula').click(function(){
         $('#modalMatricula').dialog('open');
         });
         $('#buscaMatricula').click(function(){
         var matricula = $('#matriculaInpt').attr('value');
         $.get(
         '/verifica-matricula/?matricula='+matricula,
         function(data){
         $('#resultadoMatricula').html(data);
         }
         );
         });
         $('#modalMatricula').dialog('open');

         $('#abreOrientacao').click(function(){
         $('#modalOrientacao').dialog('open');
         });
         $('#buscaOrientacao').click(function(){
         var matricula = $('#orientacaoInpt').attr('value');
         $.get(
         '/verifica-orientacao/?matricula='+matricula,
         function(data){
         $('#resultadoOrientacao').html(data);
         }
         );
         });
         $('#modalOrientacao').dialog('open');

         $('#abreAula').click(function(){
         $('#modalAula').dialog('open');
         });
         $('#buscaAula').click(function(){
         var matricula = $('#matriculaInptAula').attr('value');
         $.get(
         '/verifica-aula/?matricula='+matricula,
         function(data){
         $('#resultadoAula').html(data);
         }
         );
         });
         */
    });
</script>
{?include file="footer.tpl"?}