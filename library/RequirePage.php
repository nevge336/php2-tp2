<?php

class RequirePage
{
    static public function model($page)
    {
        return require_once('model/' . $page . '.php');
    }

    static public function redirect($page)
    {
        header('location: https://e9040356.webdev.cmaisonneuve.qc.ca/php2-tp2/' . $page);
    }
}
