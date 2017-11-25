<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClassLoader
 *
 * @author tantraadmin
 */
class ClassLoader {
    //put your code here
    
    public $registerNameSpace=array();
    public function __construct() {
        
    }
    
    public function addPrefix($name,$path){
        return $this->$registerNameSpace[$registerNameSpace]=$path;
    }
    
    public function addPrefixes($args=array('namespace'=>'','path'=>'')){
        return $this->$registerNameSpace=$args;
    }
}
