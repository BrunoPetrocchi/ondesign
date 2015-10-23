<?php

class Dicas {

     private $db;

     public function Dicas() {
          $this->db = $GLOBALS[db_homepage];
     }

     public function ExibirDicas() {
          $sql = "SELECT A.IDDICA , B.NOME  AS CURSO,A.TITULO ,A.IDCURSO , B.IDCURSO
          FROM posgraduacao.tbldicas AS A 
          LEFT JOIN posgraduacao.tblcursos AS B ON (A.IDCURSO = B.IDCURSO)
          WHERE A.APAGADO = 0 ORDER BY A.IDDICA DESC";
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

     public function InserirDicas($idcursos, $titulo, $data, $detalhe) {
          $sql = "INSERT INTO posgraduacao.tbldicas VALUES (NULL, '$idcursos','$titulo','$data','$detalhe',0 )";
          echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

     public function EditarDicas($id) {
          $sql = "SELECT A.IDDICA , B.NOME  AS CURSO, A.TITULO ,A.IDCURSO , B.IDCURSO, A.DATA , A.DETALHE
          FROM posgraduacao.tbldicas AS A 
          LEFT JOIN posgraduacao.tblcursos AS B ON (A.IDCURSO = B.IDCURSO)
          WHERE A.APAGADO = 0 AND IDDICA = '$id'";
          
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }
      public function AlterarDicas($id,$idcurso,$titulo,$data,$detalhe ) {
          $sql = "UPDATE posgraduacao.tbldicas SET IDCURSO = '$idcurso', TITULO = '$titulo', DATA = '$data', DETALHE='$detalhe' WHERE IDDICA = '$id'";
         // echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }
     
     public function ExcluirDicas($id) {
          $sql = "UPDATE posgraduacao.tbldicas SET APAGADO = 1 WHERE IDDICA = '$id'";
          echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

}

?>