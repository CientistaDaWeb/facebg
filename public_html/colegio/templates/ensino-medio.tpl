{?include file="header.tpl"?}
<link type="text/css" href="{?$basePATH?}/_css/prettyPhoto.css" rel="stylesheet" />
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.prettyPhoto.js">
</script>
<link type="text/css" href="{?$basePATH?}/_css/jquery.jcarousel.css" rel="stylesheet" />
<link type="text/css" href="{?$basePATH?}/_css/_img/tango/skin.css" rel="stylesheet" />
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.jcarousel.pack.js">
</script>
<script type="text/javascript">
    $(document).ready(function() {
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
        <h2>Ensino Médio</h2>
    </div>
    <p>O Ensino Médio do Colégio Cenecista São Roque contempla conteúdos e estratégias de aprendizagem voltadas a capacitar o estudante quanto as habilidades e competências para a aplicação dos conteúdos aprendidos na sociedade atual.</p>
    <p>A proposta educacional está voltada ao desenvolvimento no educando das seguintes competências:</p>
    <p>•	Domínio da norma culta da Língua Portuguesa e uso das linguagens matemática, artística e científica;</p>
    <p>•	Construir e aplicar conceitos de várias áreas do conhecimento para a compreensão de fenômenos naturais, de processos históricos e geográficos, da produção tecnológica e das manifestações artísticas;</p>
    <p>•	Selecionar, organizar, relacionar, interpretar dados e informações representados de diferentes formas para tomar decisões, enfrentar situações e construir em situações concretas argumentação consistente;</p>
    <p>•	Recorrer aos conhecimentos desenvolvidos na escola para a elaboração de propostas de intervenção solidária na realidade, respeitando os valores humanos e considerando a diversidade sociocultural.</p>
    <p>Os alunos também participam de projetos educacionais interdisciplinares (Grêmio Estudantil, Projeto Meu primeiro emprego e Projeto: Profissões, entre outros), cujo é colocar em prática os valores de cidadania e responsabilidade social.</p>
    <p><b>1ª SÉRIE:</b></p>
    <p><b>LÍNGUA PORTUGUESA:</b> ELIANE ZANCHETTA DALMAS</p>
    <p><b>LITERATURA:</b> ADRIANA ELIAS JOSENDE</p>
    <p><b>MATEMÁTICA:</b> KÁTIA ZAGO SCHENATTO</p>
    <p><b>HISTÓRIA:</b> GUSTAVO VALDUGA</p>
    <p><b>GEOGRAFIA:</b> LEONARDO POMPERMAYER</p>
    <p><b>FILOSOFIA:</b> GUSTAVO VALDUGA</p>
    <p><b>EDUCAÇÃO FÍSICA:</b> FRANCISCO OSORIO PEREIRA OURIQUE</p>
    <p><b>L.E.M. – INGLÊS:</b> SUELEN DE MARCO</p>
    <p><b>L.E.M. – ESPANHOL:</b> KELEN RIGO</p>
    <p><b>ARTES:</b> PATRÍCIA L. ASSUMPÇÃO</p>
    <p><b>BIOLOGIA:</b> GIORDANA DE ROSSI TIGRE</p>
    <p><b>QUÍMICA:</b> KARINA GOBBATO</p>
    <p><b>FÍSICA:</b> LEOMAR DE BORTOLI</p>
    <p><b>SOCIOLOGIA:</b> GUSTAVO VALDUGA</p>
    <br />
    <p><b>2ª SÉRIE:</b></p>
    <p><b>LÍNGUA PORTUGUESA:</b> ELIANE ZANCHETTA DALMAS</p>
    <p><b>LITERATURA:</b>ADRIANA ELIAS JOSENDE</p>
    <p><b>MATEMÁTICA:</b> KÁTIA ZAGO SCHENATTO</p>
    <p><b>HISTÓRIA:</b> GUSTAVO VALDUGA</p>
    <p><b>GEOGRAFIA:</b> LEONARDO POMPERMAYER</p>
    <p><b>FILOSOFIA:</b> GUSTAVO VALDUGA</p>
    <p><b>EDUCAÇÃO FÍSICA:</b> FRANCISCO OSORIO PEREIRA OURIQUE</p>
    <p><b>L.E.M. – INGLÊS:</b> SUELEN DE MARCO</p>
    <p><b>L.E.M. – ESPANHOL:</b> KELEN RIGO</p>
    <p><b>BIOLOGIA:</b> GIORDANA DE ROSSI TIGRE</p>
    <p><b>QUÍMICA:</b> ANA MARIA DA COSTA BRUSQUE</p>
    <p><b>FÍSICA:</b> LEOMAR DE BORTOLI</p>
    <p><b>SOCIOLOGIA:</b> GUSTAVO VALDUGA</p>
    <br />
    <p><b>3ª SÉRIE:</b></p>
    <p><b>LÍNGUA PORTUGUESA:</b> ELIANE ZANCHETTA DALMAS</p>
    <p><b>LITERATURA:</b> ADRIANA ELIAS JOSENDE</p>
    <p><b>MATEMÁTICA:</b> KÁTIA ZAGO SCHENATTO</p>
    <p><b>HISTÓRIA:</b> GUSTAVO VALDUGA</p>
    <p><b>GEOGRAFIA:</b> LEONARDO POMPERMAYER</p>
    <p><b>FILOSOFIA:</b> GUSTAVO VALDUGA</p>
    <p><b>EDUCAÇÃO FÍSICA:</b> FRANCISCO OSORIO PEREIRA OURIQUE</p>
    <p><b>L.E.M. – INGLÊS:</b> SUELEN DE MARCO</p>
    <p><b>L.E.M. – ESPANHOL:</b> KELEN RIGO</p>
    <p><b>BIOLOGIA:</b> GIORDANA DE ROSSI TIGRE</p>
    <p><b>QUÍMICA:</b> ANA MARIA DA COSTA BRUSQUE</p>
    <p><b>FÍSICA:</b> LEOMAR DE BORTOLI</p>
    <p><b>SOCIOLOGIA:</b> GUSTAVO VALDUGA</p>


    <img src="{?$basePATH?}/_img/colegio/galeria/ensino-medio/thumbs/Imagem114.jpg" alt="Ensino Médio" width="107" height="80" />
</div>

<!--
<div class="box">
  <div class="titulo">
        <h2>Fotos do Ensino Médio</h2>
    </div>
    <ul class="jcarousel-skin-tango galeria">
{?foreach from=$fotosEnsM item=foto?}
<li>
    <a href="{?$basePATH?}/_img/colegio/galeria/ensino-medio/{?$foto.imagem?}" title="{?$foto.legenda?}" rel="fotosEJA[]"><img src="{?$basePATH?}/_img/colegio/galeria/ensino-medio/thumbs/{?$foto.imagem?}" alt="{?$foto.legenda?}" /></a>
</li>
{?/foreach?}
</ul>
<p class="instrucoes">
* Clique nas imagens para ampliar!
</p>
</div>
-->
{?include file="footer.tpl"?}