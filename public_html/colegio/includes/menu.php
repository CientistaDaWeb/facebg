<?php

$menu['titulo'] = 'Home';
$menu['link'] = '/';
$menu['selecionado'] = '';
$menus[] = $menu;
$menu = '';

$menu['titulo'] = 'Sobre o Colégio';
$menu['link'] = '';
$menu['selecionado'] = 'colegio';

$submenu['titulo'] = 'Direção/Coordenação';
$submenu['link'] = '/colegio/direcao-coordenacao';
$menu['submenus'][] = $submenu;

$submenu['titulo'] = 'Instituição';
$submenu['link'] = '/colegio/instituicao';
$menu['submenus'][] = $submenu;

$submenu['titulo'] = 'Secretaria';
$submenu['link'] = '/colegio/secretaria';
$menu['submenus'][] = $submenu;

$menus[] = $menu;
$menu = '';

$menu['titulo'] = '<b>Bolsas de Estudo</b>';
$menu['link'] = '/bolsas-de-estudo';
$menu['selecionado'] = 'bolsas-de-estudo';

//$submenu['titulo'] = 'Edital para Bolsas de Estudos';
//$submenu['link'] = '/arquivos/edital_colegio_cenecista_sao_roque_6.pdf';
//$submenu['target'] = '_blank';
//$menu['submenus'][] = $submenu;
//$submenu = '';

$submenu['titulo'] = 'Ficha Socioeconômica';
$submenu['link'] = '/arquivos/ficha_socioeconomica_educacao_infantil_fundamental_media_6.pdf';
$submenu['target'] = '_blank';
$menu['submenus'][] = $submenu;
$submenu = '';

//$submenu['titulo'] = 'Modelo de Recurso';
//$submenu['link'] = '/arquivos/modelo_de_recurso_bolsas_de_estudo_8.pdf';
//$submenu['target'] = '_blank';
//$menu['submenus'][] = $submenu;
//$submenu = '';

$submenu['titulo'] = 'Modelos de Declarações';
$submenu['link'] = '/arquivos/modelos_declaracoes_10.pdf';
$submenu['target'] = '_blank';
$menu['submenus'][] = $submenu;
$submenu = '';

$submenu['titulo'] = 'Edital de Renovação';
$submenu['link'] = '/arquivos/edital_renovacao.pdf';
$submenu['target'] = '_blank';
$menu['submenus'][] = $submenu;
$submenu = '';

/*
  $submenu['titulo'] = 'Lista de Selecionados Veteranos';
  $submenu['link'] = '/arquivos/candidatos_veteranos_2.pdf';
  $submenu['target'] = '_blank';
  $menu['submenus'][] = $submenu;
  $submenu = '';

  $submenu = '';
  $submenu['titulo'] = 'Lista de Selecionados Novos';
  $submenu['link'] = '/arquivos/candidatos_novos.pdf';
  $submenu['target'] = '_blank';
  $menu['submenus'][] = $submenu;
  $submenu = '';

  $submenu = '';
  $submenu['titulo'] = 'Lista de Indeferidos';
  $submenu['link'] = '/arquivos/candidatos_indeferidos.pdf';
  $submenu['target'] = '_blank';
  $menu['submenus'][] = $submenu;
  $submenu = '';

  $submenu = '';
  $submenu['titulo'] = 'Lista de Veteranos Selecionados';
  $submenu['link'] = '/arquivos/veteranos_selecionados.pdf';
  $submenu['target'] = '_blank';
  $menu['submenus'][] = $submenu;
  $submenu = '';


  $submenu = '';
  $submenu['titulo'] = 'Lista de Espera';
  $submenu['link'] = '/arquivos/lista_espera2.pdf';
  $submenu['target'] = '_blank';
  $menu['submenus'][] = $submenu;
  $submenu = '';
 */


$menus[] = $menu;
$menu = '';

$menu['titulo'] = 'Educação Infantil';
$menu['link'] = '/educacao-infantil';
$menu['selecionado'] = 'educacao-infantil';
$menus[] = $menu;
$menu = '';

$menu['titulo'] = 'Ensino Fundamental';
$menu['link'] = '/ensino-fundamental';
$menu['selecionado'] = 'ensino-fundamental';
$menus[] = $menu;
$menu = '';

$menu['titulo'] = 'Ensino Médio';
$menu['link'] = '/ensino-medio';
$menu['selecionado'] = 'ensino-medio';
$menus[] = $menu;
$menu = '';

//$menu['titulo'] = 'Eja';
//$menu['link'] = '/eja';
//$menu['selecionado'] = 'eja';
//$menus[] = $menu;
//$menu = '';

$menu['titulo'] = 'Notícias';
$menu['link'] = '/noticias';
$menu['selecionado'] = 'noticias';
$menus[] = $menu;
$menu = '';

$menu['titulo'] = 'Ambientes';
$menu['link'] = '/ambientes';
$menu['selecionado'] = 'ambientes';
$menus[] = $menu;
$menu = '';

$menu['titulo'] = 'Contato';
$menu['link'] = '/contato';
$menu['selecionado'] = 'contato';
$menus[] = $menu;
$menu = '';

$smarty->assign('menus', $menus);
$smarty->assign('selecionado', $baseURL[1]);
