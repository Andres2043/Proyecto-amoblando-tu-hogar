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
    private $Usuario;
    private $Documento;
    private $Genero;
    private $Ciudad;
    private $security;


    public function __construct() {
        try{
            $this->Usuario= new Usuario();
            $this->Documento= new Documento();
            $this->Genero= new Genero();
            $this->Ciudad= new Ciudad();
            $this->security= new Security();
            
        } catch (Exception $e) {
            
            die($e->getMessage());
        }
    }


    public function login(){
        require_once 'views/all/header.php';
        require_once 'views/all/navbar.php';
        require_once 'views/index/login.php';
        require_once 'views/all/footer.php';
        
    }
    public function Primer_login(){
        require_once 'views/all/header.php';
        require_once 'views/all/navbar.php';
        require_once 'views/index/Primer_login.php';
        require_once 'views/all/footer.php';
    }
    
    
    
    public function Registro(){
        require_once 'views/all/header.php';
        require_once 'views/all/navbar.php';
        require_once 'views/index/Registro.php';
        require_once 'views/all/footer.php';
    }
    public function Guardar_Usuario(){
         echo $Primer_Nombre=$_POST['prim_nom'];
        $Segundo_Nombre=$_POST['seg_nom'];
        $Primer_Apellido=$_POST['prim_ap'];
        $Segundo_Apellido=$_POST['seg_ap'];
        $Correo=$_POST['email'];
        $Pasword=$_POST['password'];
        $Id_Documento=$_POST['Documento'];
        $Id_Genero=$_POST['genero'];
        $Id_Ciudad=$_POST['ciudad'];
        
        $this->Usuario->create($Primer_Nombre,$Segundo_Nombre,$Primer_Apellido,$Segundo_Apellido,$Correo,$Pasword,$Id_Documento,$Id_Genero,$Id_Ciudad);
        header('location:?c=usuario&m=Primer_login');
    }
    public function autentificacion(){
        $Correo=$_POST['email'];
        $pasword=$_POST['password'];
        foreach ($this->Usuario->consultar_correo($Correo) as $value){}
        if($Correo==$value->Correo and $pasword==$value->Pasword){
            $this->security->Auth($Correo);
            header('location:?c=administrador&m=home');
        }else{
            echo 'algo anda mal';
        }
    }
    
    
}


