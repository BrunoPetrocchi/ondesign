<?php

class Eventos {

     private $db;

     public function Eventos() {
          $this->db = $GLOBALS[db_homepage];
     }

     public function CadastrarEventos($NOME,$DATA) {
          $sql = "INSERT INTO posgraduacao.tbleventos VALUES (NULL,'$NOME','$DATA',1)";
          	//echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     } 
      public function AlterarEventos($id,$nome,$data) {
          $sql = "UPDATE posgraduacao.tbleventos SET NOME = '$nome', DATA='$data' WHERE IDEVENTO = '$id'";
          	echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     } 
     public function ApagarEventos($id) {
          $sql = "UPDATE posgraduacao.tbleventos SET APAGADO = 0 where IDEVENTO = '$id'";
          	//echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     } 
     public function ConsultaEventosId($id) {
          $sql = "SELECT IDEVENTO, NOME, DATA , APAGADO  FROM posgraduacao.tbleventos WHERE IDEVENTO = '$id'";
          	//echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }
     
     public function ListaEventos() {
          $sql = "SELECT IDEVENTO, NOME, DATA FROM posgraduacao.tbleventos WHERE APAGADO = 1 ORDER BY IDEVENTO DESC";
          //	echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }
     
      public function ListaAnexoEventos($id) {
          $sql = "SELECT IDEVENTOFOTO, IDEVENTO, NOME  FROM posgraduacao.tbleventofotos WHERE IDEVENTO = '$id' ORDER BY IDEVENTO DESC";
          //	echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }
     
     public function EventosMaxId() {
          $sql = "SELECT MAX(IDEVENTOFOTO) AS ULTIMO FROM posgraduacao.tbleventofotos";
          //	echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

}

//return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
//return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
?>
	
