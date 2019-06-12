<?php

namespace app\controllers;


class ClientController
{
    public function index(){
        echo 'Index clients';
    }
    public function listClients($params){
        var_dump($params);
    }
}