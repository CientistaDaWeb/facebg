<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <title>Faculdade Cenecista - {?$title?}</title>
        {?* Meta Tags *?}
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="author" content="Fernando Henrique - Webscientist" />
        <meta name="description" content="Faculdade Cenecista de Bento Gonçalves" />
        <meta name="keywords" content="cenecista, faculdade, colegio, pós médio" />
        <meta name="subject" content="cenecista, faculdade, colégio, pós médio" />
        <meta name="robots" content="index,follow" />
        <meta http-equiv="content-language" content="pt-br" />
        <meta name="reply-to" content="secretaria@cnecbento.com.br" />
        {?* Estilos *?}
        <link rel="stylesheet" type="text/css" media="screen" href="{?$basePATH?}/_css/common.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="{?$basePATH?}/_css/ui-lightness/jquery-ui-1.8.6.custom.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="/_css/style.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="{?$basePATH?}/_css/superfish.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="{?$basePATH?}/_css/superfish-vertical.css" />
        {?* Favicons *?}
        <link rel="Shortcut Icon" href="{?$basePATH?}/_css/_img/favicon.ico" />
        <link rel="icon" href="{?$basePATH?}/_css/_img/favicon.ico" />
        {?* Javascripts *?}
        <script type="text/javascript" src="{?$basePATH?}/_js/jquery-1.7.2.min.js">
        </script>
        <script type="text/javascript" src="{?$basePATH?}/_js/jquery-ui-1.8.6.custom.min.js">
        </script>
        <script type="text/javascript" src="{?$basePATH?}/_js/swfobject.js">
        </script>
        <script type="text/javascript" src="{?$basePATH?}/_js/hoverIntent.js">
        </script>
        <script type="text/javascript" src="{?$basePATH?}/_js/superfish.js">
        </script>
        <script type="text/javascript" src="{?$basePATH?}/_js/slider.jquery.pack.js">
        </script>
        <script type="text/javascript">
            $(".sf-menu").superfish({
                animation: {
                    opacity: 'show',
                    height: 'show'
                },
                speed: 'fast',
                autoArrows: true,
                dropShadows: true,
                delay: 700
            });
        </script>
    </head>
    <body>
        <div id="div_site">
            <div id="div_menunav">
                <h1>Faculdade Cenecista</h1>
                <!--
                <div id="marcador">
                <img src="{?$basePATH?}/_img/faculdade/marcador.jpg" />
                </div>
                -->
                <ul class="sf-menu sf-vertical sf-js-enabled sf-shadow">
                    {?foreach from=$menus item=menu?}
                    <li>
                        <a href="{?$menu.link?}" title="{?$menu.titulo?}" {?if $menu.target?}target="{?$menu.target?}"{?/if?} {?if $menu.selecionado  == $selecionado?}class="selecionado"{?/if?}>| {?$menu.titulo?} </a>
                        {?if $menu.submenus?}
                        <ul>
                            {?foreach from=$menu.submenus item=submenu?}
                            <li><a href="{?$submenu.link?}" title="{?$submenu.titulo?}" {?if $submenu.target?}target="{?$submenu.target?}"{?/if?}>{?$submenu.titulo?}</a></li>
                                {?/foreach?}
                        </ul>
                        {?/if?}
                    </li>
                    {?/foreach?}
                </ul>
                <div id="banners_laterais">
                    {?foreach from=$banners item=banner?}
                    <div id="{?$banner.slug?}">
                        <script type="text/javascript">
                            var flashvars = {};
                            var params = {};
                            var attributes = {};
                            params.menu = "false";
                            {?if $banner.transparente == 1?}
                            params.wmode = "transparent";
                            {?/if?}
                            swfobject.embedSWF("http://docs.serverws.com.br/cnecbento.com.br/banners/{?$banner.banner?}", "{?$banner.slug?}", "{?$banner.largura?}", "{?$banner.altura?}", "6.0.0", "{?$basePATH?}/_swf/expressInstall.swf", flashvars, params, attributes);
                        </script>
                    </div>
                    {?/foreach?}
                    <a href="/naf"><img src="{?$basePATH?}/_img/faculdade/naf.gif" alt="Núcle de Apoio Contábil e Fiscal" border="0" /></a>
                    <a href="http://portal.mec.gov.br" target="_blank"><img src="{?$basePATH?}/_img/faculdade/banner_portal_mec.gif" alt="Portal do MEC" width="190" height="75" border="0" /></a>
                    <a href="http://sisfiesportal.mec.gov.br" target="_blank"><img src="{?$basePATH?}/_img/faculdade/banner_fies.gif" alt="Informações sobre o FIES" width="190" height="75" border="0" /></a>
                    <a href="http://www.enem.inep.gov.br" target="_blank"><img src="{?$basePATH?}/_img/faculdade/banner_enem.gif" alt="Informações sobre o ENEM" width="190" height="75" border="0" /></a>
                    <a href="http://ead.cnec.br/moodle2.4/login/index.php " target="_blank"><img src="{?$basePATH?}/_img/faculdade/banner_semipresencial.jpg" alt="Semi Presencial" width="190" border="0" /></a>
                    <!--<a href="http://prouniportal.mec.gov.br" target="_blank"><img src="{?$basePATH?}/_img/faculdade/banner_prouni.gif" alt="Informações sobre o PROUNI" width="190" height="75" border="0" /></a>-->
                </div>
            </div>
            <div id="div_content">
                {?if !$naoMostraFlashTopo?}
                <div id="setores">
                    <a href="http://colegio.cnecbento.com.br">Colégio</a>
                    <a href="http://posmedio.cnecbento.com.br">Pós Médio</a>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#banner-topo').lateralSlider({
                            numColumns: 15
                        });
                    });
                </script>
                <div id="banner-topo">
                    {?*                    <a href="http://posead.cnec.br/" target="_blank"><img src="{?$basePATH?}/_img/faculdade/ead6.jpg" alt="Ensino a Distância" border="0" /></a>*?}
                    <a href="http://graduacaoead.cnec.br/" target="_blank"><img src="{?$basePATH?}/_img/faculdade/ead5.jpg" alt="Ensino a Distância" border="0" /></a>
                    <a href="http://centralweb.cnec.br/vestibular/?RVNDQ29kaWdvPTgwMDAwJlNFRENvZGlnbz0yMDIwJlBFUkNvZGlnbz0yMDE2LTImUFNMQ29kaWdvPUJFTlRP" target="_blank"><img src="{?$basePATH?}/_img/faculdade/web_bento.jpg" alt="Vestibular Cenecista" border="0" /></a>
                    <a href="http://centralweb.cnec.br/vestibular/?RVNDQ29kaWdvPTgwMDAwJlNFRENvZGlnbz0yMDIwJlBFUkNvZGlnbz0yMDE2LTImUFNMQ29kaWdvPUJFTlRP" target="_blank"><img src="{?$basePATH?}/_img/faculdade/web_bento.jpg" alt="Vestibular Cenecista" border="0" /></a>
                    <a href="http://centralweb.cnec.br/vestibular/?RVNDQ29kaWdvPTgwMDAwJlNFRENvZGlnbz0yMDIwJlBFUkNvZGlnbz0yMDE2LTImUFNMQ29kaWdvPUJFTlRP" target="_blank"><img src="{?$basePATH?}/_img/faculdade/web_bento.jpg" alt="Vestibular Cenecista" border="0" /></a>
                </div>
                <!--
                <div id="banner-topo">
                    <img src="/_img/banner/foto1.jpg" />
                    <img src="/_img/banner/foto2.jpg" />
                    <img src="/_img/banner/foto3.jpg" />
                    <img src="/_img/banner/foto4.jpg" />
                </div>
                <!--
                <a href="/vestibular" title="Vestibular Cenecista">
                <img src="/_img/vestibular/2013/1/banner.jpg" alt="Vestibular Cenecista" />
                </a>
                -->

                <!--
                <div id="bannerVestibular20123" style="background: #FFF;"></div>
                <script type="text/javascript">
                var flashvars = {};
                var params = {};
                var attributes = {};
                params.menu = "false";
                params.wmode = "transparent";
                swfobject.embedSWF("/_swf/vestibular20123.swf", "bannerVestibular20123", "765", "280", "6.0.0", "{?$basePATH?}/_swf/expressInstall.swf", flashvars, params, attributes);
                </script>
                -->
                <div id="div_cnecvirtual">
                    <a href="http://centralweb.cnec.br/DiarioCNEC/Login.aspx" target="_blank" style="margin: 0; display:block; background: #606CA8; padding: 10px; color: #FFF; text-align: center; font-size: 150%;">=> Para acessar a ÁREA RESTRITA, clique AQUI <=</a>
                    <br />
                    <a href="http://ead.cnec.br/moodle2.4/login/index.php" target="_blank" style="margin: 0; display:block; background: #606CA8; padding: 10px; color: #FFF; text-align: center; font-size: 150%;">Disciplinas de Graduação Modalidade à Distância</a>
                </div>
                {?/if?}
                <div id="div_wrapper">
                    <!--                                <br />
                    <p><b>Login:</b> número da matrícula (04 números na frente do cartão acadêmico).</p>
                    <p><b>Senha:</b> se for o primeiro acesso - repetir o número da matrícula senão, digitar senha cadastrada anteriormente.</p>-->