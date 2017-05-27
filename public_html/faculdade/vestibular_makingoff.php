<?php
for($i=1;$i<170; $i++){
    $fotos[] = 'vestibular_inverno'.substr('000'.$i,-3).'.JPG';
}
$smarty->assign('fotos', $fotos);
$smarty->assign('title', 'Making Off da Campanha do Vestibular');
$smarty->display('vestibular_makingoff.tpl');