<?php

class Trabalhos {

    private $db;

    public function Trabalhos() {
        $this->db = $GLOBALS[db_homepage];
    }
    
    public function CadTrabalhos($titulo,$autor,$data_trabalho,$anexo) {
        $sql = "INSERT INTO posgraduacao.tbltrabalhoscientificos VALUES (NULL,'$titulo','$autor','$data_trabalho','$anexo',0)";
        echo $sql;
        return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
    }
    
 
    public function ExibirTrabalhos(){
        $sql="SELECT IDTRABALHOCIENTIFICO, TITULO, AUTOR, DATA_TRABALHO
          FROM posgraduacao.tbltrabalhoscientificos
          WHERE APAGADO = 0 ORDER BY IDTRABALHOCIENTIFICO DESC";
        return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
    }
    
     
    public function ExibirTrabalhosId($id){
        $sql="SELECT IDTRABALHOCIENTIFICO, TITULO, AUTOR, DATA_TRABALHO 
          FROM posgraduacao.tbltrabalhoscientificos
          WHERE IDTRABALHOCIENTIFICO = '$id'";
        return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
    }
    
    public function ExibirAnexoTrabalhoCientifico($id){
        $sql="SELECT IDANEXOTC, IDTRABALHOCIENTIFICO, NOME FROM posgraduacao.tblanexotrabalhoscientificos
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
    
     public function ExibirTrabalhosMax(){
        $sql="SELECT MAX(IDTRABALHOCIENTIFICO) as ULTIMO FROM posgraduacao.tbltrabalhoscientificos";
        
        return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
    }
    
    public function ConsultaCodigo($id){
        $sql="SELECT IDTRABALHOCIENTIFICO FROM tbltrabalhoscientificos WHERE IDTRABALHOCIENTIFICO = '$id'";        
        return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
    }
    public function InserirAnexoTrabalhos($idtrab) {
        $sql = "INSERT INTO posgraduacao.tblanexotrablhoscientificos VALUES (NULL'$idtrab',0)";
        echo $sql;
        return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
    }
}
?>






