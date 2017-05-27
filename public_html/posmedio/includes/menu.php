<?php

require_once('../classes/cursos.class.php');
$cursos = new cursos();
$listaCursos = $cursos->listaMenu($setor);
$smarty->assign('listaCursos', $listaCursos);

$menu['titulo'] = 'Home';
$menu['link'] = '/';
$menu['selecionado'] = '';
$menus[] = $menu;
$menu = '';
$menu['titulo'] = 'Sobre o Pós Médio';
$menu['link'] = '';
$menu['selecionado'] = 'posmedio';

$submenu['titulo'] = 'Direção/Coordenação';
$submenu['link'] = '/posmedio/direcao-coordenacao';
$menu['submenus'][] = $submenu;

$submenu['titulo'] = 'Instituição';
$submenu['link'] = '/posmedio/instituicao';
$menu['submenus'][] = $submenu;

$submenu['titulo'] = 'Secretaria';
$submenu['link'] = '/posmedio/secretaria';
$menu['submenus'][] = $submenu;

$menus[] = $menu;
$menu = '';

if (is_array($listaCursos)) {
    foreach ($listaCursos AS $cursos) {
        $menu['titulo'] = $cursos['dados']['categoria'];
        $menu['link'] = '#';
        $menu['selecionado'] = '#';
        foreach ($cursos['cursos'] AS $curso) {
            $submenu['titulo'] = $curso['curso'];
            $submenu['link'] = '/curso/' . $cursos['dados']['slug'] . '/' . $curso['slug'];
            $menu['submenus'][] = $submenu;
        }
        $menus[] = $menu;
        $menu = '';
    }
}

$menu['titulo'] = '<b>Bolsas de Estudo</b>';
$menu['link'] = '/bolsas-de-estudo';
$menu['selecionado'] = 'bolsas-de-estudo';

/*
$submenu['titulo'] = 'Edital para Bolsas de Estudos';
$submenu['link'] = '/arquivos/edital_eja_e_educacao_profissionalizante_2015_2.pdf';
$submenu['target'] = '_blank';
$menu['submenus'][] = $submenu;
$submenu = '';
 */

$submenu['titulo'] = 'Ficha Socioeconômica';
$submenu['link'] = '/arquivos/ficha_socioeconomica_educacao_basica_eja_e_educacao_profissional_2016.pdf';
$submenu['target'] = '_blank';
$menu['submenus'][] = $submenu;
$submenu = '';


/*
$submenu['titulo'] = 'Modelo de Recurso';
$submenu['link'] = '/arquivos/modelo_de_recurso_educacao_basica_e_profisional_2014.pdf';
$submenu['target'] = '_blank';
$menu['submenus'][] = $submenu;
$submenu = '';
 *
 */

$submenu['titulo'] = 'Modelo de Declarações';
$submenu['link'] = '/arquivos/Modelo_de_Declaracoes_2016.pdf';
$submenu['target'] = '_blank';
$menu['submenus'][] = $submenu;
$submenu = '';

/*
$submenu['titulo'] = 'Candidatos Pré Selecionados';
$submenu['link'] = '/arquivos/pre_selecionados_bolsa.pdf';
$submenu['target'] = '_blank';
$menu['submenus'][] = $submenu;
$submenu = '';
*/
////$submenu['titulo'] = 'Candidatos Selecionados';
//$submenu['link'] = '/arquivos/CANDIDATOS_PRE_SELECIONADOS_ENSINO_PROFISSIONAL_3.pdf';
//$submenu['target'] = '_blank';
//$menu['submenus'][] = $submenu;
//$submenu = '';

/*
$submenu['titulo'] = ' Selecionados Lista de Espera';
$submenu['link'] = '/arquivos/chamados_lista_de_espera_tecnicos.pdf';
$submenu['target'] = '_blank';
$menu['submenus'][] = $submenu;
$submenu = '';
*/
$menus[] = $menu;
$menu = '';

$menu['titulo'] = 'Notícias';
$menu['link'] = '/noticias';
$menu['selecionado'] = 'noticias';
$menus[] = $menu;
$menu = '';

$menu['titulo'] = 'Contato';
$menu['link'] = '/contato';
$menu['selecionado'] = 'contato';
$menus[] = $menu;
$menu = '';

$smarty->assign('menus', $menus);
$smarty->assign('selecionado', $baseURL[1]);