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
    private $modelUsuario;
    
    public function __construct() {
        try{
            $this->modelUsuario= new Usuario();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function login(){
        require_once 'views/all/header.php';
        require_once 'views/all/navbar.php';
        require_once 'views/index/login.php';
        require_once 'views/all/footer.php';
        
    }public function Registro(){
        require_once 'views/all/header.php';
        require_once 'views/all/navbar.php';
        require_once 'views/index/Registro.php';
        require_once 'views/all/footer.php';
    }
    public function store_user(){
        $data=array($_POST['email'],$_POST['password']);
        $this->modelUsuario->create($data);
    }
}
