<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $db1;
  
    private $db2;

    public function __construct()
    {
        $this->db1 = db_connect(); 
        
        $this->db2 = db_connect("Company2"); 
    }

    public function index()
    {
        $model = new \App\Models\MultiDBModel($this->db2);
        $user = $model->findAllCustom();
        print_r($user);
    }
}
