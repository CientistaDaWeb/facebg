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
            visible: 5
        });
        $(".galeria a").prettyPhoto({
            theme: "light_rounded",
            counter_separator_label: " de "
        });
    });
</script>
<div class="box">
    <div class="titulo">
        <h2>EDUCAÇÃO INFANTIL</h2>
    </div>
    <h3>Creche Infantil</h3>
    <p>Objetivo da Série: Tem por finalidade o brincar que é uma das atividades fundamentais para o desenvolvimento da identidade e da autonomia, sendo à base de toda a ação pedagógica e é através das brincadeiras que podem-se desenvolver algumas capacidades importantes como: atenção, imaginação, socialização, aceitação de normas e regras.</p>
    <h3>Jardim I</h3>
    <p>Objetivo da Série: Tem por finalidade brincar, cuidar e aprender de forma orientada e integrada, contribuindo no desenvolvimento das capacidades infantis, possibilitando as atitudes básicas de aceitação, respeito e confiança através do conhecimento das potencialidades corporais, emocionais e éticas na perspectiva de contribuir para a formação de crianças felizes e saudáveis.</p>
    <h3>Jardim II</h3>
    Objetivo da Série: Tem por finalidade criar condições para o desenvolvimento integral das crianças. Para tanto, faz-se necessário uma prática educativa que propicie o desenvolvimento das capacidades, nas áreas: física, afetiva, cognitiva, ética, estética, de relação interpessoal e inserção social, considerando habilidades, interesses e individualidades.</p>
    <ul class="jcarousel-skin-tango galeria">
        <li><a href="{?$basePATH?}/_img/colegio/educacao_infantil/Imagem_042.jpg" rel="fotosColegio[]">
                <img src="{?$basePATH?}/_img/colegio/educacao_infantil/thumb/Imagem_042.jpg" />
            </a></li>
        <li><a href="{?$basePATH?}/_img/colegio/educacao_infantil/Imagem_078.jpg" rel="fotosColegio[]">
                <img src="{?$basePATH?}/_img/colegio/educacao_infantil/thumb/Imagem_078.jpg" />
            </a></li>
        <li><a href="{?$basePATH?}/_img/colegio/educacao_infantil/Imagem_081.jpg" rel="fotosColegio[]">
                <img src="{?$basePATH?}/_img/colegio/educacao_infantil/thumb/Imagem_081.jpg" />
            </a></li>
    </ul>
</div>
{?include file="footer.tpl"?}