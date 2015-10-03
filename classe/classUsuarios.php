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
        $sql="SELECT IDUSUARIO, NOME , EMAIL, SENHA  FROM posgraduacao.tblusuarios WHERE APAGADO = 0 ORDER BY IDUSUARIO DESC";
        return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
    }
    
    public function ConsultarUsurioId($id){
        $sql="SELECT IDUSUARIO ,NOME, EMAIL, SENHA FROM posgraduacao.tblusuarios  WHERE IDUSUARIO = '$id'";
        echo $sql;
        return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
    }

    public function EditarUsuario($id, $nome, $senha) {
        $sql = "UPDATE usuarios SET USUARIO_NOME = '$nome', USUARIO_SENHA = '$senha' WHERE id = '$id'";
        //echo $sql;
        return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
    }

}
?>






