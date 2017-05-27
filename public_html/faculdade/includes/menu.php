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

$menu['titulo'] = 'Sobre a Faculdade';
$menu['link'] = '';
$menu['selecionado'] = 'faculdade';

$submenu['titulo'] = 'Direção/Coordenação';
$submenu['link'] = '/faculdade/direcao-coordenacao';
$menu['submenus'][] = $submenu;

$submenu['titulo'] = 'Instituição';
$submenu['link'] = '/faculdade/instituicao';
$menu['submenus'][] = $submenu;

$submenu['titulo'] = 'Secretaria';
$submenu['link'] = '/faculdade/secretaria';
$menu['submenus'][] = $submenu;

$submenu['titulo'] = 'Documentos Oficiais';
$submenu['link'] = '/faculdade/documentos-oficiais';
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
        $submenu = '';
    }
}

$menu['titulo'] = 'Bolsas de Estudo EAD';
$menu['link'] = '/bolsas-de-estudo-ead';

/*
  $submenu['titulo'] = 'Mais informações';
  $submenu['link'] = '/bolsas-de-estudo-ead';
  $menu['submenus'][] = $submenu;
 *
 */


$submenu['titulo'] = 'Edital Ingressantes (1ª Matrícula)';
$submenu['link'] = '/arquivos/Edital_EAD_2016_novatos_4.pdf';
$submenu['target'] = '_blank';
$menu['submenus'][] = $submenu;

$submenu['titulo'] = 'Edital Veteranos (renovação)';
$submenu['link'] = '/arquivos/Edital_EAD_2016_renovacao_veteranos_3.pdf';
$submenu['target'] = '_blank';
$menu['submenus'][] = $submenu;

//$submenu['titulo'] = 'Edital EAD ProUni (Renovação)';
//$submenu['link'] = '/arquivos/Edital_EAD_2016_prouni_renovacao.pdf';
//$submenu['target'] = '_blank';
//$menu['submenus'][] = $submenu;

$submenu['titulo'] = 'Ficha Socioeconômica EAD';
$submenu['link'] = '/arquivos/Ficha_Socioeconomica_EAD_2016.pdf';
$submenu['target'] = '_blank';
$menu['submenus'][] = $submenu;

$submenu['titulo'] = 'Modelos de Declarações';
$submenu['link'] = '/arquivos/Modelo_Declaracoes_EAD_2016.pdf';
$submenu['target'] = '_blank';
$menu['submenus'][] = $submenu;

//$submenu['titulo'] = 'Lista de Aprovados Veteranos';
//$submenu['link'] = '/arquivos/EAD_RESULTADO_FINAL_9.pdf';
//$submenu['target'] = '_blank';
//$menu['submenus'][] = $submenu;

//$submenu['titulo'] = 'Lista de Aprovados Novatos';
//$submenu['link'] = '/arquivos/EAD_RESULTADO_FINAL_6.pdf';
//$submenu['target'] = '_blank';
//$menu['submenus'][] = $submenu;

$menus[] = $menu;
$menu = '';

$menu['titulo'] = 'Bolsas de Estudo Prouni';
$menu['link'] = '#';

//$submenu['titulo'] = 'Edital';
//$submenu['link'] = '/arquivos/Edital_Prouni_2015_2.pdf';
//$submenu['target'] = '_blank';
//$menu['submenus'][] = $submenu;

$submenu['titulo'] = 'Edital Veteranos (renovação 2017/1)';
$submenu['link'] = '/arquivos/Edital_EAD_2016_prouni_renovacao_3.pdf';
$submenu['target'] = '_blank';
$menu['submenus'][] = $submenu;

$submenu['titulo'] = 'Ficha Socioeconômica';
$submenu['link'] = '/arquivos/Ficha_Socioeconomica_Prouni_2016.pdf';
$submenu['target'] = '_blank';
$menu['submenus'][] = $submenu;

$submenu['titulo'] = 'Modelos de Declarações';
$submenu['link'] = '/arquivos/Modelo_Declaracoes_Prouni_2016.pdf';
$submenu['target'] = '_blank';
$menu['submenus'][] = $submenu;

//$submenu['titulo'] = 'Modelo de Recurso';
//$submenu['link'] = '/arquivos/Modelo_Recurso_Prouni_2015.pdf';
//$submenu['target'] = '_blank';
//$menu['submenus'][] = $submenu;

//$submenu['titulo'] = 'Lista de Pré-Seleção (2016/2)';
//$submenu['link'] = '/arquivos/CANDIDATOS_PRE_SELECIONADOS_EDUCACAO_SUPERIOR_BOLSAS_PROUNI_7.pdf';
//$submenu['target'] = '_blank';
//$menu['submenus'][] = $submenu;

//$submenu['titulo'] = 'Alunos Selecionados';
//$submenu['link'] = '/arquivos/CANDIDATOS_SELECIONADOS_EDUCACAO_SUPERIOR_BOLSAS_PROUNI_4.pdf';
//$submenu['target'] = '_blank';
//$menu['submenus'][] = $submenu;

//$submenu['titulo'] = 'Alunos Selecionados (Veteranos)';
//$submenu['link'] = '/arquivos/lista_veteranos_prouni_2016_3.pdf';
//$submenu['target'] = '_blank';
//$menu['submenus'][] = $submenu;

$menus[] = $menu;
$menu = '';

$menu['titulo'] = '<b>Bolsas de Estudo CNEC</b>';
$menu['link'] = '/bolsas-de-estudo';
$menu['selecionado'] = 'bolsas-de-estudo';

//$submenu['titulo'] = 'Edital';
//$submenu['link'] = '/arquivos/Edital_Bolsa_de_Estudo_2015_5.pdf';
//$submenu['target'] = '_blank';
//$menu['submenus'][] = $submenu;
//$submenu = '';

$submenu['titulo'] = 'Edital Veteranos (renovação 2017/1)';
$submenu['link'] = '/arquivos/Edital_Bolsa_de_Estudo_2016_renovacao_2.pdf';
$submenu['target'] = '_blank';
$menu['submenus'][] = $submenu;
$submenu = '';

//$submenu['titulo'] = 'Termo Aditivo do Edital';
//$submenu['link'] = '/arquivos/Edital_Bolsa_de_Estudo_2015_aditivo_2.pdf';
//$submenu['target'] = '_blank';
//$menu['submenus'][] = $submenu;
//$submenu = '';

//$submenu['titulo'] = 'Edital (Ingressantes - 1ª matrícula)';
//$submenu['link'] = '/arquivos/Edital_Bolsa_de_Estudo_2016_ingressantes.pdf';
//$submenu['target'] = '_blank';
//$menu['submenus'][] = $submenu;
//$submenu = '';

$submenu['titulo'] = 'Ficha Socioeconômica';
$submenu['link'] = '/arquivos/Ficha_Socio_Economica_2016.pdf';
$submenu['target'] = '_blank';
$menu['submenus'][] = $submenu;
$submenu = '';

//$submenu['titulo'] = 'Modelo de Recurso - Educação Superior';
//$submenu['link'] = '/arquivos/Modelo_de_Recurso_2014_2.pdf';
//$submenu['target'] = '_blank';
//$menu['submenus'][] = $submenu;
//$submenu = '';

$submenu['titulo'] = 'Modelos de Declarações';
$submenu['link'] = '/arquivos/Modelo_de_Declaracoes_2016.pdf';
$submenu['target'] = '_blank';
$menu['submenus'][] = $submenu;
$submenu = '';

//$submenu['titulo'] = 'Alunos Selecionados';
//$submenu['link'] = '/arquivos/CANDIDATOS_SELECIONADOS_EDUCACAO_SUPERIOR_BOLSAS_CNEC_8.pdf';
//$submenu['target'] = '_blank';
//$menu['submenus'][] = $submenu;
//$submenu = '';

//$submenu['titulo'] = 'Lista de Veteranos Pré Selecionados (2016/2)';
//$submenu['link'] = '/arquivos/CANDIDATOS_PRE_SELECIONADOS_EDUCACAO_SUPERIOR_BOLSAS_CNEC_8.pdf';
//$submenu['target'] = '_blank';
//$menu['submenus'][] = $submenu;
//$submenu = '';

//$submenu['titulo'] = 'Lista de Novatos Pré Selecionados';
//$submenu['link'] = '/arquivos/CANDIDATOS_PRE_SELECIONADOS_EDUCACAO_SUPERIOR_BOLSAS_CNEC_9.pdf';
//$submenu['target'] = '_blank';
//$menu['submenus'][] = $submenu;
//$submenu = '';

//$submenu['titulo'] = 'Alunos Selecionados (Novatos)';
//$submenu['link'] = '/arquivos/lista_novatos_cnec_2016.pdf';
//$submenu['target'] = '_blank';
//$menu['submenus'][] = $submenu;
//$submenu = '';

//$submenu['titulo'] = 'Alunos Selecionados (Veteranos)';
//$submenu['link'] = '/arquivos/lista_veteranos_cnec_2016_2.pdf';
//$submenu['target'] = '_blank';
//$menu['submenus'][] = $submenu;
//$submenu = '';

/*
  $menus[] = $menu;
  $menu = '';


  $menu['titulo'] = '<b>PROUNI</b>';
  $menu['link'] = '/prouni';
  $menu['selecionado'] = 'prouni';

  $submenu['titulo'] = 'Edital';
  $submenu['link'] = '/arquivos/Edital_Prouni_2014_4.pdf';
  $submenu['target'] = '_blank';
  $menu['submenus'][] = $submenu;
  $submenu = '';

  $submenu['titulo'] = 'Ficha Socioeconômica';
  $submenu['link'] = '/arquivos/Ficha_Socio_Economica_Prouni_2014_3.pdf';
  $submenu['target'] = '_blank';
  $menu['submenus'][] = $submenu;
  $submenu = '';

  $submenu['titulo'] = 'Modelo de Recurso - Educação Superior';
  $submenu['link'] = '/arquivos/Modelo_de_Recurso_2014_2.pdf';
  $submenu['target'] = '_blank';
  $menu['submenus'][] = $submenu;
  $submenu = '';

  $submenu['titulo'] = 'Modelo de Declarações';
  $submenu['link'] = '/arquivos/Modelo_de_Declaracoes_2015_2.pdf';
  $submenu['target'] = '_blank';
  $menu['submenus'][] = $submenu;
  $submenu = '';

 */

/*

  $submenu['titulo'] = 'Manual do Bolsista';
  $submenu['link'] = '/arquivos/Manual_Prouni_2014.pdf';
  $submenu['target'] = '_blank';
  $menu['submenus'][] = $submenu;
  $submenu = '';

  $submenu['titulo'] = 'Portaria Normativa';
  $submenu['link'] = '/arquivos/Portaria_Normativa_Prouni_2013_2.pdf';
  $submenu['target'] = '_blank';
  $menu['submenus'][] = $submenu;
  $submenu = '';
 */

$menus[] = $menu;
$menu = '';

$menu['titulo'] = '<b>Vestibular</b>';
//$menu['link'] = '/vestibular';
$menu['link'] = 'http://vestibular.cnec.br/facebg/';
$menu['selecionado'] = 'vestibular';

$submenu['titulo'] = 'Informações';
//$submenu['link'] = '/vestibular';
$submenu['link'] = 'http://vestibular.cnec.br/facebg/';
$menu['submenus'][] = $submenu;
$submenu = '';

$submenu['titulo'] = 'INSCREVA-SE JÁ';
$submenu['link'] = 'http://centralweb.cnec.br/vestibular/?RVNDQ29kaWdvPTgwMDAwJlNFRENvZGlnbz0yMDIwJlBFUkNvZGlnbz0yMDE2LTImUFNMQ29kaWdvPUJFTlRP';
$menu['submenus'][] = $submenu;
$submenu = '';

if ($inscricoesAbertas) {
    $submenu['titulo'] = 'Inscrição';
    $submenu['link'] = '/vestibular/inscricao';
    $menu['submenus'][] = $submenu;
    $submenu = '';

    $submenu['titulo'] = 'Confirmação de Inscrição';
    $submenu['link'] = '/vestibular/confirmacao-inscricao';
    $menu['submenus'][] = $submenu;
    $submenu = '';
}
/*
  $submenu['titulo'] = 'Manual do Candidato';
  $submenu['link'] = '/vestibular/manual-candidato';
  $menu['submenus'][] = $submenu;
  $submenu = '';
 */

//$submenu['titulo'] = 'Edital de Processo Seletivo';
//$submenu['link'] = '/vestibular/edital';
//$menu['submenus'][] = $submenu;
//$submenu = '';

$menus[] = $menu;
$menu = '';

/*
  $menu['titulo'] = 'Calendário Acadêmico';
  $menu['link'] = '/calendario-academico';
  $menu['selecionado'] = 'calendario-academico';
  $menus[] = $menu;
  $menu = '';
 */

$menu['titulo'] = 'FIES';
$menu['link'] = '/fies';
$menu['selecionado'] = 'fies';
$menus[] = $menu;
$menu = '';

$menu['titulo'] = 'Instituto de Pesquisa';
$menu['link'] = '/instituto-pesquisa';
$menu['selecionado'] = 'instituto-pesquisa';
$menus[] = $menu;
$menu = '';

$menu['titulo'] = 'Guia de Transporte';
$menu['link'] = '/transporte';
$menu['selecionado'] = 'transporte';
$menus[] = $menu;
$menu = '';

$menu['titulo'] = 'Notícias';
$menu['link'] = '/noticias';
$menu['selecionado'] = 'noticias';
$menus[] = $menu;
$menu = '';

$menu['titulo'] = 'DCE / CAS';
$menu['link'] = '/dce-cas';
$menu['selecionado'] = 'dce-cas';
$menus[] = $menu;
$menu = '';

$menu['titulo'] = 'Biblioteca';
$menu['link'] = '#';
$menu['selecionado'] = 'biblioteca';

$submenu['titulo'] = 'Biblioteca Virtual';
$submenu['link'] = '/biblioteca';
$menu['submenus'][] = $submenu;
$submenu = '';

$submenu['titulo'] = 'Revistas Eletrônicas';
$submenu['link'] = '/revistas-eletronicas';
$menu['submenus'][] = $submenu;
$submenu = '';

$menus[] = $menu;
$menu = '';

$menu['titulo'] = 'Ouvidoria';
$menu['link'] = '/ouvidoria';
$menu['selecionado'] = 'ouvidoria';
$menus[] = $menu;
$menu = '';

$menu['titulo'] = 'CPA';
$menu['link'] = '/cpa';
$menu['selecionado'] = 'cpa';
$menus[] = $menu;
$menu = '';

$menu['titulo'] = 'CEP';
$menu['link'] = '/cep';
$menu['selecionado'] = 'cep';
$menus[] = $menu;
$menu = '';

$menu['titulo'] = 'Modelos e Logotipia';
$menu['link'] = '/modelos';
$menu['selecionado'] = 'modelos';
$menus[] = $menu;
$menu = '';

$menu['titulo'] = 'Guia Acadêmico';
$menu['link'] = '/arquivos/guia_academico_2016.pdf';
$menu['selecionado'] = 'guia';
$menu['target'] = '_blank';
$menus[] = $menu;
$menu = '';

$smarty->assign('menus', $menus);
$smarty->assign('selecionado', $baseURL[1]);
