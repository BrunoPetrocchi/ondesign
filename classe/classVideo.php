<?php

class Videos {

    private $db;

    public function Videos() {
        $this->db = $GLOBALS[db_homepage];
    }
    
    public function  CadVideos($url, $nome){
        $sql = "INSERT INTO posgraduacao.tblvideos values (NULL, '$url', '$nome',0)";
       // echo $sql;
        return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
    }
    
    public function  ExibirVideos(){
        $sql="SELECT IDVIDEO, URL, NOME FROM posgraduacao.tblvideos WHERE APAGADO = 0 ORDER BY IDVIDEO DESC ";
        return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
    }
    
    public function ConsultarVideos($id){
        $sql="SELECT IDVIDEO, URL, NOME FROM posgraduacao.tblvideos  WHERE IDVIDEO = '$id'";
        return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
    }
    
    public function EditarVideos($id, $url, $nome) {
        $sql = "UPDATE posgraduacao.tblvideos SET URL='$url', NOME='$nome' WHERE IDVIDEO='$id'";
        //echo $sql;
        return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
    }
    
    public function ApagarVideos($id) {
        $sql = "UPDATE posgraduacao.tblvideos SET APAGADO = 1 WHERE IDVIDEO = '$id'";
        //echo $sql;
        return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
    }
    
    
}
?>