<?php

class Trabalhos {

    private $db;

    public function Trabalhos() {
        $this->db = $GLOBALS[db_homepage];
    }
    
    public function CadTrabalhos($titulo,$autor,$data_trabalho) {
        $sql = "INSERT INTO posgraduacao.tbltrabalhoscientificos VALUES(NULL,'$titulo','$autor','$data_trabalho',0,0,0)";
        //echo $sql;
        return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
    }
    
    public function ExibirTrabalhos(){
        $sql="SELECT IDTRABALHOCIENTIFICO, TITULO, AUTOR, DATA_TRABALHO, ANEXO 
          FROM posgraduacao.tbltrabalhoscientificos
          WHERE APAGADO = 0 ORDER BY IDTRABALHOCIENTIFICO DESC";
        return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
    }
    
    public function ExibirAnexoTrabalhos($id){
        $sql="SELECT IDTRABALHOCIENTIFICO, ANEXO, APAGADO_ANEXO FROM tbltrabalhoscientificos WHERE IDTRABALHOCIENTIFICO = '$id'";
        return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
    }
    
    public function ExibirTrabalhosId($id){
        $sql="SELECT IDTRABALHOCIENTIFICO, TITULO, AUTOR, DATA_TRABALHO, ANEXO 
          FROM posgraduacao.tbltrabalhoscientificos
          WHERE IDTRABALHOCIENTIFICO = '$id'";
        return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
    }
    
    public function EditarTrabalhos($id,$titulo,$autor,$data_trabalho) {
        $sql = "UPDATE posgraduacao.tbltrabalhoscientificos SET TITULO = '$titulo', AUTOR = '$autor', DATA_TRABALHO = '$data_trabalho'
             WHERE IDTRABALHOCIENTIFICO = '$id'";
        //echo $sql;
        return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
    }
    
    public function ApagarTrabalhos($id) {
        $sql = "UPDATE posgraduacao.tbltrabalhoscientificos SET APAGADO = 1 WHERE IDTRABALHOCIENTIFICO = '$id'";
        //echo $sql;
        return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
    }
}
?>






