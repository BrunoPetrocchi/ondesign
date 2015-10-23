<?php

class VagaEmprego {

     private $db;

     public function VagaEmprego() {
          $this->db = $GLOBALS[db_homepage];
     }

     public function CadastrarVagaEmprego($TITULO, $EMRPESA, $CARGO, $DESCRICAO) {
          $sql = "INSERT INTO posgraduacao.tblvagaemprego VALUES (NULL,'$TITULO','$EMRPESA', '$CARGO', '$DESCRICAO')";
          	//echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     } 
      public function AlterarVagaEmprego($id,$titulo,$empresa, $cargo, $descricao) {
          $sql = "UPDATE posgraduacao.tblvagaemprego SET TITULO = '$titulo', EMPRESA='$empresa', CARGO='$cargo', DESCRICAO='$descricao' WHERE IDVAGAEMPREGO = '$id'";
          	echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     } 
     public function ApagarVagaEmprego($id) {
          $sql = "UPDATE posgraduacao.tblvagaemprego SET APAGADO = 0 where IDVAGAEMPREGO = '$id'";
          	//echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     } 
     public function ConsultaVagaEmpregoId($id) {
          $sql = "SELECT IDVAGAEMPREGO, TITULO, EMPRESA, CARGO, DESCRICAO, APAGADO  FROM posgraduacao.tblvagaemprego WHERE IDVAGAEMPREGO = '$id'";
          	//echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }
     
     public function ListaVagaEmprego() {
          $sql = "SELECT IDVAGAEMPREGO, TITULO, EMPRESA, CARGO FROM posgraduacao.IDVAGAEMPREGO WHERE APAGADO = 1 ORDER BY IDVAGAEMPREGO DESC";
          //	echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

}

//return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
//return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
?>
	

