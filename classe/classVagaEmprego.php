<?php

class VagaEmprego {

     private $db;

     public function VagaEmprego() {
          $this->db = $GLOBALS[db_homepage];
     }

     public function CadastrarVagaEmprego($TITULO, $EMPRESA, $CARGO, $DESCRICAO) {
          $sql = "INSERT INTO posgraduacao.tblvagasemprego VALUES (NULL,'$TITULO','$EMPRESA', '$CARGO', '$DESCRICAO',0)";
          	echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     } 
      public function AlterarVagaEmprego($id,$titulo,$empresa, $cargo, $descricao) {
          $sql = "UPDATE posgraduacao.tblvagasemprego SET TITULO = '$titulo', NOMEEMPRESA='$empresa', CARGO='$cargo', DETALHES='$descricao' WHERE IDVAGAEMPREGO = '$id'";
          	//echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     } 
     public function ApagarVagaEmprego($id) {
          $sql = "UPDATE posgraduacao.tblvagasemprego SET APAGADO = 1 where IDVAGAEMPREGO = '$id'";
          	//echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     } 
     public function ConsultaVagaEmpregoId($id) {
          $sql = "SELECT IDVAGAEMPREGO, TITULO, NOMEEMPRESA, CARGO, DETALHES, APAGADO  FROM posgraduacao.tblvagasemprego WHERE IDVAGAEMPREGO = '$id'";
          	//echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }
     
     public function ListaVagaEmprego() {
          $sql = "SELECT IDVAGAEMPREGO, TITULO, NOMEEMPRESA, CARGO FROM posgraduacao.tblvagasemprego WHERE APAGADO = 0 ORDER BY IDVAGAEMPREGO DESC";
          //	echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

}

//return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
//return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
?>
	

