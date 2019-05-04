<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of indexController
 *
 * @author APRENDIZ
 */
class indexController {
    
    
    public function home(){
        require_once 'views/all/header.php';
        require_once 'views/index/home.php';
        require_once 'views/all/footer.php';
    }
}
