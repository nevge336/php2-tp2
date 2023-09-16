<?php

RequirePage::model('Client');

class ControllerClient extends Controller
{
    public function index()
    {
        $client = new Client;
        $select = $client->select();

        // $view = new View('client-index');
        // $view->output('clients', $select);
        Twig::render('client-index.php', ['clients' => $select]);
    }



    public function create()
    {
        // $view = new View('client-create');
        Twig::render('client-create.php');
    }



    public function store()
    {
        $client = new Client;
        $insert = $client->insert($_POST);
        RequirePage::redirect('client');
    }



    public function show($id)
    {
        $client = new Client;
        $selectId = $client->selectId($id);
        // print_r($selectId) ;
        Twig::render('client-show.php', ['client' => $selectId]);
    }



    public function edit($id)
    {
        $client = new Client;
        $selectId = $client->selectId($id);
        Twig::render('client-edit.php', ['client' => $selectId]);
    }



    public function update()
    {
        print_r($_POST);
        $client = new Client;
        $update = $client->update($_POST);
        // print_r($update);
        if($update){
            RequirePage::redirect('client');
        }else{
            print_r($update);
        }
        
    }
}
