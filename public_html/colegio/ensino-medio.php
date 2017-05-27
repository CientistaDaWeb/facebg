<?php

    $fotosEnsM = array(
        array('imagem'=>'100_0598.jpg', 'legenda'=>''),
		array('imagem'=>'100_0600.jpg', 'legenda'=>''),
		array('imagem'=>'Imagem114.jpg', 'legenda'=>''),
		array('imagem'=>'Imagem284.jpg', 'legenda'=>''),
		array('imagem'=>'Imagem287.jpg', 'legenda'=>''),
    );
    $smarty->assign('fotosEnsM', $fotosEnsM);
	
$smarty->assign('title', 'Ensino Médio');
$smarty->display('ensino-medio.tpl');