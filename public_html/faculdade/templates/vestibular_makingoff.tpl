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
            visible: 5
        });
        $(".galeria img").click(function(){
            var source = $(this).attr('rel');
            $('#big_makingoff').attr('src',source);
        });
    });
</script>
<div class="box">
    <ul class="jcarousel-skin-tango galeria">
        {?foreach from=$fotos item=foto?}
        <li>
            <img style="cursor: pointer;" rel="http://faculdade.{?$dominio?}/_img/makingoff/{?$foto?}" src="http://faculdade.{?$dominio?}/_img/makingoff/thumbs/{?$foto?}" />
        </li>
        {?/foreach?}
    </ul>
    <p class="instrucoes">
        * Clique nas imagens para ampliar!
    </p>
    <div style="text-align: center">
        <img src="http://faculdade.{?$dominio?}/_img/makingoff/{?$fotos.1?}" id="big_makingoff" />
    </div>
</div>
{?include file="footer.tpl"?}