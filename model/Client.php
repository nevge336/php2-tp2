<?php
require_once('Crud.php');

class Client extends Crud {

    public $table = 'mlab_client';
    public $primaryKey = 'client_id';
    public $fillable = [
        'client_id',
        'client_name',
        'client_contact',
        'client_address',
        'client_postal_code',
        'client_email',
        'client_phone'
    ];

}