<?php

class Cursos {

     private $db;

     public function Cursos() {
          $this->db = $GLOBALS[db_homepage];
     }

     public function CadCurso($idusuario, $nome, $nivel, $publico, $objetivos, $possibilidades, $estrutura, $modulo, $duracao, $inicio, $horario, $turma, $requisitos, $embasamento, $investimento, $convenios, $mec,$observacao) {
          $sql = "INSERT INTO posgraduacao.tblcursos VALUES
          (NULL,'$idusuario','$nome','$nivel',
          '$publico','$objetivos','$possibilidades','$estrutura',
          '$modulo','$duracao','$inicio','$horario','$turma','$requisitos',
          '$embasamento','$investimento','$convenios','$mec','$observacao',0 )";
        // echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

     public function ExibirCursos() {
          $sql = "SELECT IDCURSO, NOME, NIVEL, APAGADO, PUBLICOALVO FROM posgraduacao.tblcursos WHERE APAGADO = 0 ORDER BY IDCURSO DESC";
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

     public function ConsultarCursoId($id) {
          $sql = "SELECT IDCURSO, IDUSUARIO, NOME, NIVEL
          PUBLICOALVO,NOME,NIVEL,PUBLICOALVO,
          OBJETIVOS,POSSIBILIDADESPROFISSIONAIS,
          ESTRUTURAOFERECIDA, MODULOS, DURACAO,
          INICIO, HORARIO, TURMAMINIMA, REQUISITOS, EMBASAMENTOLEGAL,
          INVESTIMENTO,CONVENIOS,MEC,OBSERVACAO FROM posgraduacao.tblcursos WHERE IDCURSO = '$id'";
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

     public function EditarCurso($idcurso,$usuario, $nome, $nivel, $publico, $objetivos, $possibilidades, $estrutura, $modulos, $duracao, $inicio, $horario, $turma, $requisitos, $embasamento, $investimento, $convenios, $mec, $observacao) {
          $sql = "UPDATE posgraduacao.tblcursos
          SET
          IDUSUARIO = '$usuario', NOME = '$nome', NIVEL = '$nivel',
          PUBLICOALVO = '$publico',OBJETIVOS='$objetivos',
          POSSIBILIDADESPROFISSIONAIS='$possibilidades',
          ESTRUTURAOFERECIDA='$estrutura', MODULOS='$modulos', DURACAO='$duracao',
          INICIO='$inicio', HORARIO='$horario', TURMAMINIMA='$turma', REQUISITOS='$requisitos', EMBASAMENTOLEGAL='$embasamento',
          INVESTIMENTO='$investimento',CONVENIOS='$convenios',MEC='$mec',
          OBSERVACAO = '$observacao' WHERE  IDCURSO = '$idcurso'";
          //echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

     public function ExcluirCurso($id) {
          $sql = "UPDATE posgraduacao.tblcursos SET apagado = 1  where IDCURSO = '$id'";
          //echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

}
