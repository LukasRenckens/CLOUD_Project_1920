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
    /**
     * @var string
     */
    protected $h;

    /** 
     * request constructor
     * @param double $h 
     */
    public function __contruct($h){
        $this->h = $h;
    }
    
    /**
     * @return double
     */
    public function getDagmenu(){
        return $this->h;
    }
}
