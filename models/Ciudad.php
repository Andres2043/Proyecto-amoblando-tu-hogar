<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ciudad
 *
 * @author APRENDIZ
 */
class Ciudad {
    private $pdo;
    public function __construct() {
        try{
            $this->pdo=DB::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function consultar(){
            try{
            $stm=$this->pdo->prepare("SELECT * FROM Ciudad");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (Exception $e) {
                die($e->getMessage());
            }
    }
}
