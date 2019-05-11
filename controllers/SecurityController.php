<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SecurityController
 *
 * @author APRENDIZ
 */
class SecurityController extends Security {
    private $security;
    
    public function salir(){
        parent::Destroy();
    }
}
