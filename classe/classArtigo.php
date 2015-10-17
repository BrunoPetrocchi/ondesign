<?php

class Artigos {

    private $db;

    public function Artigos() {
        $this->db = $GLOBALS[db_homepage];
    }
    
    public function  CadArtigos($titulo, $autor, $data, $artigo){
        $sql = "INSERT INTO posgraduacao.tblartigos values (NULL, '$titulo', '$autor', '$data', '$artigo',0)";
        return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
    }
    
    public function  ExibirArtigos(){
        $sql="SELECT IDARTIGO, TITULO, AUTOR, DATA, ARTIGO FROM posgraduacao.tblartigos WHERE APAGADO = 0";
        return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
    }
    
    public function ConsultarArtigos($id){
        $sql="SELECT TITULO, AUTOR, DATA, ARTIGO FROM posgraduacao.tblartigos  WHERE IDARTIGO = '$id' AND APAGADO = 0";
        return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
    }
    
    public function EditarArtigos($id, $titulo, $autor, $data, $artigo) {
        $sql = "";
        //echo $sql;
        return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
    }
}
?>