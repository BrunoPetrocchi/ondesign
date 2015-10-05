<?php

class Trabalhos {

    private $db;

    public function Trabalhos() {
        $this->db = $GLOBALS[db_homepage];
    }
    
    public function CadTrabalhos() {
        $sql = "";
        //echo $sql;
        return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
    }
    
    public function ExibirTrabalhos(){
        $sql="";
        return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
    }
    
}
?>






