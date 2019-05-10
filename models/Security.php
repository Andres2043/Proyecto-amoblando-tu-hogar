<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Security
 *
 * @author APRENDIZ
 */
class Security extends DB{
   public function Auth(){
       try{
           $stm= parent::Conectar()->prepare("SELECT * FROM Clientes WHERE Correo = ?");
           $stm->bindParam(1,$Correo,PDO::PARAM_STR);
           $stm->execute();
           $_SESSION['USER']= $stm->fetch(PDO::FETCH_OBJ);
       } catch (Exception $e) {
           die($e->getMessage());
       }
   }
   public function Destroy(){
       unset($_SESSION['USER']);
       session_destroy();
       header('location:?c=usuario&m=registro');
   }
   
   public function validate(){
       if(!isset($_SESSION['USER']) OR is_null($_SESSION['USER'])){
           header('location:?c=usuario&m=registro');
       }
   }
}
