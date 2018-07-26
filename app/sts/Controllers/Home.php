<?php

namespace Sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}  //impede o acesso da página no sistema

/**
 * Description of Usuario
 *
 * @ copyright (c) year, Luciana Mendes Marques
 */
class Home
{

    public function index()
    {
        
        $home = new \Sts\Models\StsHome();
        $home->index();
        
        $carregarView = new \Core\ConfigView("sts/Views/home/home");
        $carregarView->renderizar();
    }

}
