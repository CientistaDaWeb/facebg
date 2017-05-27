<?php
header("Location: http://faculdadecnecbento.cnec.br/", true, 301);
exit();

session_start();
require_once('../smarty/Smarty.class.php');
require_once('../classes/database.class.php');
require_once('../classes/banners.class.php');
require_once('../classes/vestibulares.class.php');
require_once('../includes/functions.php');
$smarty = new smarty();

$setor = explode(".", $_SERVER['HTTP_HOST']);
$setor = $setor[0];

$smarty->left_delimiter = "{?";
$smarty->right_delimiter = "?}";

$baseURL = $_SERVER['REQUEST_URI'];
$baseURL = explode('/', $baseURL);

$basePATH = $_SERVER['HTTP_HOST'];
$basePATH = explode('.',$basePATH);
unset($basePATH[0]);

$dominio = implode('.',$basePATH);
$smarty->assign('dominio', $dominio);

$basePATH = 'http://'.implode('.',$basePATH);
$smarty->assign('basePATH', $basePATH);

$banners = new banners();
$banners = $banners->lista($setor);
$smarty->assign('banners', $banners);

$hoje = date('Y-m-d');

$vestibular = new vestibulares();
$inscricoesAbertas = $vestibular->inscricoesAbertas();

setlocale (LC_ALL, 'pt_BR');
date_default_timezone_set('America/Sao_Paulo');
