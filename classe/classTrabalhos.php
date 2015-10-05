<?php

class Usuarios {

    private $db;

    public function Usuarios() {
        $this->db = $GLOBALS[db_homepage];
    }
    
    public function CadUsuarios($nome, $email ,$senha) {
        $sql = "INSERT INTO posgraduacao.tblusuarios values (NULL, '$nome','$email','$senha','0')";
        //echo $sql;
        return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
    }
    
    public function ExibirUsuarios(){
        $sql="SELECT IDUSUARIO, NOME , EMAIL  FROM posgraduacao.tblusuarios WHERE APAGADO = 0 ORDER BY IDUSUARIO DESC";
        return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
    }
    
    public function ConsultarUsurioId($id){
        $sql="SELECT IDUSUARIO ,NOME, EMAIL, SENHA FROM posgraduacao.tblusuarios  WHERE IDUSUARIO = '$id'";
       // echo $sql;
        return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
    }

    public function EditarUsuario($id,$nome, $email, $senha) {
        $sql = "UPDATE posgraduacao.tblusuarios SET NOME = '$nome', EMAIL = '$email', SENHA = '$senha' WHERE IDUSUARIO = '$id'";
        // echo $sql;
        return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
    }
     public function ApagarUsuario($id) {
        $sql = "UPDATE posgraduacao.tblusuarios SET APAGADO = 1 WHERE IDUSUARIO = '$id'";
        // echo $sql;
        return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
    }
}
?>






