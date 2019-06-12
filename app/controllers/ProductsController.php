<?php


namespace app\controllers;


class ProductsController
{
    public function index(){
        echo 'Index products';
    }

    public function listProducts($params){
        var_dump($params);
    }
}