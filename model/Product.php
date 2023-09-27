<?php
require_once('Crud.php');

class Product extends Crud{

    public $table = 'mlab_product';
    public $primaryKey = 'product_id';

    public $fillable = [
        'product_id',
        'product_name',
        'product_description',
        'product_cost',
        'product_price'
    ];
}


?>