<?php

    $fotosEJA = array(
        array('imagem'=>'eja01.jpg', 'legenda'=>''),
		array('imagem'=>'eja02.jpg', 'legenda'=>''),
		array('imagem'=>'eja03.jpg', 'legenda'=>''),
    );
    $smarty->assign('fotosEJA', $fotosEJA);
	
$smarty->assign('title', 'Educação para jovens e adultos');
$smarty->display('eja.tpl');