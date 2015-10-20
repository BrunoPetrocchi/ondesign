<?php

class Cursos {

     private $db;

     public function Cursos() {
          $this->db = $GLOBALS[db_homepage];
     }

     public function CadCurso($idusuario, $nome, $nivel, $publico, $objetivos, $possibilidade, $estrutura, $modulo, $duracao, $inicio, $horario, $turma, $requisitos, $embasamento, $investimento, $convenios, $mec,$observacao) {
          $sql = "INSERT INTO posgraduacao.tblcursos VALUES
          (NULL,'$idusuario','$nome','$nivel',
          '$publico','$objetivos','$possibilidades','$estrutura',
          '$modulo','$duracao','$inicio','$horario','$turma','$requisitos',
          '$embasamento','$investimento','$convenio','$mec','$observacao',0 )";
          echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

     public function ExibirCursos() {
          $sql = "SELECT IDCURSO, NOME, NIVEL, APAGADO, PUBLICOALVO FROM posgraduacao.tblcursos WHERE APAGADO = 0";
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

     public function ConsultarCursoId($id) {
          $sql = "SELECT IDUSUARIO, NOME, NIVEL
          PUBLICOALVO,NOME,NIVEL,PUBLICOALVO,
          OBJETIVOS,POSSIBILIDADESPROFISSIONAIS,
          ESTRUTURAOFERECIDA, MODULOS, DURACAO
          INICIO, HORARIO, TURMAMINIMA, REQUISITOS, EMBASAMENTOLEGAL,
          INVESTIMENTO,CONVENIOS,MEC,OBSERVACAO FROM posgraduacao.tblcursos WHERE IDCURSO = '$id'";
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

     public function EditarUsuario($idcurso, $nome, $nivel, $ativo, $publicoalvo, $objetivos, $possibilidadesprofissionais, $estruturaoferecida, $modulos, $duracao, $inicio, $horario, $turmaminima, $requisitos, $embasamentolegal, $investimento, $observacao, $convenios, $portariamec) {
          $sql = "UPDATE posgraduacao.tblcursos SET NOME = '$nome', NIVEL = '$nivel', ATIVO = '$ativo', PUBLICOALVO = '$publicoalvo', OBJETIVOS = '$objetivos', POSSIBILIDADESPROFISSIONAIS = '$possibilidadesprofissionais', ESTRUTURAOFERECIDA = '$estruturaoferecida', MODULOS = '$modulos',"
                  . "DURACAO = '$duracao', INICIO = '$inicio', HORARIO = '$horario', TURMAMINIMA = '$turmaminima', REQUISITOS = '$requisitos', EMBASAMENTOLEGAL = '$embasamentolegal', INVESTIMENTO = '$investimento', OBSERVACAO = '$observacao', CONVENIOS = '$convenios', PORTARIAMEC = '$portariamec' WHERE IDCURSO = '$idcurso'";
          // echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

     public function ExcluirCurso($id) {
          $sql = "UPDATE posgraduacao.tblcursos SET apagado = 1  where IDCURSO = '$id'";
          //echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

}
