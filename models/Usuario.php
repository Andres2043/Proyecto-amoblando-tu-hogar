<?php

class  Usuario extends DB{
    
    public function create ($Primer_Nombre,$Segundo_Nombre,$Primer_Apellido,$Segundo_Apellido,$Correo,$Pasword,$Id_Documento,$Id_Genero,$Id_Ciudad) {
        try{
            $stm= parent::Conectar()->prepare("INSERT INTO Clientes (Primer_Nombre,Segundo_Nombre,Primer_Apellido,Segundo_Apellido,Correo,Pasword,Id_Documento,Id_Genero,Id_Ciudad) VALUES (?,?,?,?,?,?,?,?,?)");
            $stm->bindParam(1, $Primer_Nombre, PDO::PARAM_STR);
            $stm->bindParam(2, $Segundo_Nombre, PDO::PARAM_STR);
            $stm->bindParam(3, $Primer_Apellido , PDO::PARAM_STR);
            $stm->bindParam(4, $Segundo_Apellido, PDO::PARAM_STR);
            $stm->bindParam(5, $Correo, PDO::PARAM_STR);
            $stm->bindParam(6, $Pasword, PDO::PARAM_STR);
            $stm->bindParam(7, $Id_Documento, PDO::PARAM_STR);
            $stm->bindParam(8, $Id_Genero, PDO::PARAM_STR);
            $stm->bindParam(9, $Id_Ciudad, PDO::PARAM_STR);
            $stm->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }
    public function consultar_correo($Correo){
        try{
                $stm= parent::Conectar()->prepare("SELECT * FROM Clientes WHERE Correo = ?");
                $stm->bindParam(1,$Correo,PDO::PARAM_STR);
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (Exception $e) {
                die($e->getMessage());
            }
    }
}
