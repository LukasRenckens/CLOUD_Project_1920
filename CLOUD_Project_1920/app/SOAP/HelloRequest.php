<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of request
 *
 * @author lukas
 */
namespace App\SOAP;

class HelloRequest {

    protected $h;

    public function __contruct($h){
        $this->h = $h;
    }

    public function getDagmenu(){
        return $this->h;
    }
}
