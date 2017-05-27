<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <title>Pós Médio Cenecista - {?$title?}</title>
        {?* Meta Tags *?}
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="author" content="Fernando Henrique - Webscientist" />
        <meta name="description" content="Complexo Cenecista" />
        <meta name="keywords" content="cenecista, faculdade, colegio, pós médio" />
        <meta name="subject" content="cenecista, faculdade, colégio, pós médio" />
        <meta name="robots" content="index,follow" />
        <meta http-equiv="content-language" content="pt-br" />
        <meta name="reply-to" content="secretaria@cnecbento.com.br" />
        {?* Estilos *?}
        <link rel="stylesheet" type="text/css" media="screen" href="{?$basePATH?}/_css/common.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="/_css/style.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="{?$basePATH?}/_css/superfish.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="{?$basePATH?}/_css/superfish-vertical.css" />
        {?* Favicons *?}
        <link rel="Shortcut Icon" href="{?$basePATH?}/_css/_img/favicon.ico" />
        <link rel="icon" href="{?$basePATH?}/_css/_img/favicon.ico" />
        {?* Javascripts *?}
        <script type="text/javascript" src="{?$basePATH?}/_js/jquery-1.7.2.min.js">
        </script>
        <script type="text/javascript" src="{?$basePATH?}/_js/swfobject.js">
        </script>
        <script type="text/javascript" src="{?$basePATH?}/_js/hoverIntent.js">
        </script>
        <script type="text/javascript" src="{?$basePATH?}/_js/superfish.js">
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
                <h1>Colégio Cenecista</h1>
                <div id="marcador">
                    <img src="{?$basePATH?}/_img/pos-medio/marcador.jpg" />
                </div>
                <ul class="sf-menu sf-vertical sf-js-enabled sf-shadow">
                    {?foreach from=$menus item=menu?}
                    <li>
                        <a href="{?$menu.link?}" title="{?$menu.titulo?}" {?if $menu.target?}target="{?$menu.target?}"{?/if?} {?if $menu.selecionado  == $selecionado?}class="selecionado"{?/if?}>| {?$menu.titulo?} |  </a>
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
                            swfobject.embedSWF("http://docs.serverws.com.br/cnecbento.com.br/banners/{?$banner.banner?}", "{?$banner.slug?}", "{?$banner.largura?}", "{?$banner.altura?}", "6.0.0", "/_swf/expressInstall.swf", flashvars, params, attributes);
                        </script>
                    </div>
                    {?/foreach?}
                </div>
            </div>
            <div id="div_content">
                <div id="swf_topo">
                    <script type="text/javascript">
                        var flashvars = {dominio:"{?$dominio?}"};
                        var params = {};
                        var attributes = {};
                        params.menu = "false";
                        params.wmode = "transparent";
                        swfobject.embedSWF("/_swf/topo2.swf", "swf_topo", "763", "280", "6.0.0", "{?$basePATH?}/_swf/expressInstall.swf", flashvars, params, attributes);
                    </script>
                </div>

                <div id="div_wrapper">
