<?php

$baseURL = $_SERVER['REQUEST_URI'];
$baseURL = explode('/', $baseURL);

require_once('smarty/Smarty.class.php');
require_once('classes/database.class.php');
$smarty = new smarty();

$smarty->left_delimiter = '{?';
$smarty->right_delimiter = '?}';

setlocale(LC_ALL, 'pt_BR');
date_default_timezone_set('America/Sao_Paulo');

$dominio = $_SERVER['HTTP_HOST'];
$smarty->assign('dominio', str_replace('www.', '', $dominio));

if ($_SERVER['SERVER_ADDR'] == '177.128.177.42') :
    if ($dominio == 'cnecbento.com.br' || $dominio == 'facebg.com.br' || $dominio == 'www.facebg.com.br') :
        $url = $_SERVER['REQUEST_URI'];
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: http://www.cnecbento.com.br' . $url);
    endif;
endif;