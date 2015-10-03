<?php

session_start();
ob_start();

include_once ("config/conexao.php");
include_once ("config/mysqlmanager.php");
include_once ("classe/classLogin.php");

//echo "<pre>";	print_r($_POST);echo "</pre>";

$login = isset($_POST["login"]) ? trim($_POST["login"]) : FALSE;
$senha = isset($_POST["senha"]) ? trim($_POST["senha"]) : FALSE;

if (!$login || !$senha) {
     ?>
     <script language="JavaScript">
          alert("Informações Incorretas!");
          document.location.href = "./";
     </script>
     <?php

}


//print_r($_POST);

$dbmy = new MysqlManager();

$clsLogin = new Login();

$VarBuscaLogin = $clsLogin->BuscaLogin($login);

//print_r($VarBuscaLogin);
//exit();
if (count($VarBuscaLogin) > 0) {

     if (!strcmp($senha, $VarBuscaLogin[0]['SENHA'])) {

          $_SESSION["IDUSUARIO"] = $VarBuscaLogin[0]['IDUSUARIO'];
          $_SESSION["NOME"] = $VarBuscaLogin[0]['NOME'];
          $_SESSION["SENHA"] = $VarBuscaLogin[0]['SENHA'];


          //exit();

          header("Location: painel.php");
          exit();
     } else {
          exit();
          ?>
          <script language="JavaScript">
               alert("Informações Incorretas! 2");
               document.location.href = "./";
          </script>
          <?php

     }
} else {
     ?>
     <script language="JavaScript">
          alert("Informações Incorretas! 3");
          document.location.href = "./";
     </script>
     <?php

}
?>