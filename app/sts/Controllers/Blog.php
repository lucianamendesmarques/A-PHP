<?php

namespace Sts\Controllers;
if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of Usuario
 *
 * @ copyright (c) year, Luciana Mendes Marques
 */
class Blog
{
    public function index()
    {
        echo "Página Blog <br>";
    }
}
