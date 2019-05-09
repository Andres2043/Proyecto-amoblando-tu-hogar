<?php

class  Usuario extends DB{
    
    public function create ($data) {
        try{
            $stm= parent::Conectar()->prepare("INSERT INTO Clientes (Correo,Password) VALUES (?,?)");
            $stm->bindParam(1, $data['0'], PDO::PARAM_STR);
            $stm->bindParam(2, $data['1'], PDO::PARAM_STR);
       
            $stm->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
