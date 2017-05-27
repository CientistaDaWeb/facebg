<?php
if (!empty($baseURL[2])):
    if (is_file('formados_' . $baseURL[2] . '.php')) :
        require_once('formados_' . $baseURL[2] . '.php');
    else :
        require_once('../404.php');
    endif;
else:
    $smarty->assign('title', 'Formados');
    $smarty->display('formados.tpl');
endif;