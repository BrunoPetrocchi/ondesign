<?php

class Curriculum {

     private $db;

     public function Curriculum() {
          $this->db = $GLOBALS[db_homepage];
     }

     public function CadCurriculum($nome, $nascimento, $estadocivil, $email, $residencial, $celular, $cidade, $cursos, $seminarios,$treinamento, $idiomas) {
          $sql = "INSERT INTO posgraduacao.tblcurriculos VALUES (NULL,'$nome','$nascimento','$estadocivil','$email','$residencial','$celular','$cidade','$cursos','$seminarios','$treinamento','$idiomas',0) ";
          echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

     public function ExibirArtigos() {
          $sql = "SELECT IDCURRICULO, NOME, TELEFONERESIDENCIAL, TELEFONECELULAR, CIDADE FROM posgraduacao.tblcurriculos WHERE APAGADO = 0  ORDER BY IDCURRICULO DESC";
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }
     
     public function ExibirId() {
          $sql = "SELECT A.IDCURRICULO AS IDCURRICULO , B.IDFORMACAOACADEMICA AS ACADEMICA FROM posgraduacao.tblcurriculos AS A
          LEFT JOIN posgraduacao.tblformacaoacademica AS B ON (A.IDCURRICULO = B.IDCURRICULO)";
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }
     
     public function ExibirIdProfissional() {
          $sql = "SELECT A.IDCURRICULO AS IDCURRICULO , B.IDEXPERIENCIAPROFISSIONAL AS PROFISSIONAL FROM posgraduacao.tblcurriculos AS A
          LEFT JOIN posgraduacao.tblexperienciaprofissional AS B ON (A.IDCURRICULO = B.IDCURRICULO) ";
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }
}

?>