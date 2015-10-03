<?php

class Professores {

     private $db;

     public function Professores() {
          $this->db = $GLOBALS[db_homepage];
     }

     public function CadastrarProfessor($nome, $endereco, $numero, $bairro, $cidade, $uf, $cep, $cpf, $rg, $data_nascimento, $telefone_fixo, $telefone_celular, $email, $crefito, $banco, $codigo_permissao, $observacao) {
          $sql = "INSERT INTO pilates.professor VALUES (NULL,'$nome','$endereco','$numero','$bairro','$cidade','$uf','$cep','$cpf','$rg','$data_nascimento','$telefone_fixo','$telefone_celular','$email','$crefito','$banco','123','1','$codigo_permissao','$observacao','1')";
          //echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

     public function ConsultarProfessor() {
          $sql = "SELECT
			A.codigo_professor,
			A.nome,
			A.endereco,
		  	A.numero,
			A.bairro, 
			A.cidade,
			A.cep,
			A.cpf,
			A.rg, 
			A.data_nascimento,
			A.telefone_fixo,
			A.telefone_celular,
			A.email,
			A.crefito,
			A.banco,
			A.apagado,
			A.codigo_permissao,
			B.descricao,	
			A.observacao,
                        A.status
			FROM pilates.professor A  
      		LEFT JOIN pilates.professor_permissao B ON (B.codigo_permissao = A.codigo_permissao)
			WHERE A.apagado = 1
			ORDER BY codigo_professor DESC";
          //	echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

     public function ConsultarIdProfessor($id) {
          $sql = "SELECT
			A.codigo_professor,
			A.nome,
			A.endereco,
		  	A.numero,
			A.bairro, 
			A.cidade,
			A.cep,
			A.cpf,
			A.rg, 
			A.data_nascimento,
			A.telefone_fixo,
			A.telefone_celular,
			A.email,
			A.crefito,
			A.banco,
			A.apagado,
			A.codigo_permissao,
			B.descricao,
			A.observacao,
                        A.status
			FROM pilates.professor A  
      		LEFT JOIN pilates.professor_permissao B ON (B.codigo_permissao = A.codigo_permissao)
			WHERE A.apagado = 1
			AND codigo_professor = '$id'";
          //	echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

     public function ConsultarPermissao() {
          $sql = "SELECT codigo_permissao , descricao FROM pilates.professor_permissao where apagado = 1";
          //echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }



     public function EditarProfessor($id, $nome, $endereco, $numero, $bairro, $cidade, $uf, $cep, $cpf, $rg, $data_nascimento, $telefone_fixo, $telefone_celular, $email, $crefito, $banco, $codigo_permissao, $observacao,$status) {
          $sql = "UPDATE pilates.professor SET nome='$nome', endereco='$endereco', numero='$numero', bairro='$bairro',
				cidade='$cidade', uf='$uf', cep='$cep', cpf='$cpf', rg='$rg', data_nascimento='$data_nascimento',
				telefone_fixo='$telefone_fixo', telefone_celular='$telefone_celular', email='$email', crefito='$crefito',
				banco='$banco', senha='123', codigo_permissao='$permissao', observacao='$observacao' status='$status' where codigo_professor = '$id'";

          echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

     public function ExcluirProfessor($id) {
          $sql = "UPDATE pilates.professor SET apagado = 0  where codigo_professor = '$id'";
          //echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

}

//return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
//return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
?>
	
