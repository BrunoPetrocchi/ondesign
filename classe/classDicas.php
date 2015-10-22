<?php

class Dicas {

    private $db;

    public function Dicas() {
        $this->db = $GLOBALS[db_homepage];
    }
   
    
    public function  ExibirDicas(){
        $sql="SELECT A.IDDICA , B.NOME  AS CURSO,A.TITULO 
          FROM posgraduacao.tbldicas AS A 
          LEFT JOIN posgraduacao.tblcursos AS B ON (A.IDCURSOS = B.IDCURSO)
          WHERE A.APAGADO = 0";
        return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
    }
    
}
?>