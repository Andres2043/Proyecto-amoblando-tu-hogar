<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author APRENDIZ
 */
class AdminController {
    
    public function home(){
        require_once 'views/all/header.php';
        require_once 'views/all/navbar.php';
        require_once 'views/index/Admin/home.php';
    }
}
