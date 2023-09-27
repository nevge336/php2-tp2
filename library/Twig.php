<?php

class Twig
{
    static public function render($template, $data = array())
    {
        $loader = new \Twig\Loader\FilesystemLoader(('view'));
        // la cache pour css - quand le dév est fini on fait cache=>false 
        $twig = new \Twig\Environment($loader, array('auto_reload' => true));

        //creer une variable globale Twig
        $twig->addGlobal('path', 'https://e9040356.webdev.cmaisonneuve.qc.ca/php2-tp2/');

        echo $twig->render($template, $data);
    }
}
