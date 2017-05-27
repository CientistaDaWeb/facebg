<?php

if (empty($baseURL[2])):
    header('Location: /curso-tecnico/inscricao');
endif;
if (is_file('curso-tecnico_' . $baseURL[2] . '.php')) {
    require_once('curso-tecnico_' . $baseURL[2] . '.php');
} else {
    require_once('../404.php');
}
