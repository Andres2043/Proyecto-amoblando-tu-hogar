<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdministradorController
 *
 * @author APRENDIZ
 */
class AdministradorController {
    private $security;
    public function __construct() {
        try{
            $this->security= new Security();
            $this->security->validate();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function home(){
        require_once 'views/all/header.php';
        require_once 'views/all/navbarR.php';
        require_once 'views/index/home.php';
        require_once 'views/all/footer.php';
    }
}
