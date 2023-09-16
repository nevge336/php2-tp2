<?php

class ControllerHome extends Controller
{

    public function index()
    {
        // $view = new View('home-index');
        // $view->output('name', 'Peter');
        Twig::render('home-index.php', ['name' => 'Peter']);
    }

    public function error()
    {
        Twig::render('home-error.php');
    }
}
