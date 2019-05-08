<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioController
 *
 * @author APRENDIZ
 */
class UsuarioController {
    
    
    public function login(){
        require_once 'views/all/header.php';
        require_once 'views/index/login.php';
        require_once 'views/all/footer.php';
    }
}
