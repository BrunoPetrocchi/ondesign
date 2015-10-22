<?php
include_once ("config/conexao.php");
include_once ("config/mysqlmanager.php");
$db = new MysqlManager();

include ("classe/classVideo.php"); $clsVideos = new Videos();
include ("classe/classEventos.php"); $clsEventos = new Eventos();
include ("classe/classUsuarios.php"); $clsUsuarios = new Usuarios();
include ("classe/classTrabalhos.php"); $clsTrabalhos = new Trabalhos();
include ("classe/classArtigo.php"); $clsArtigos = new Artigos();
include ("classe/classCurso.php"); $clsCurso = new Cursos();
include ("classe/classCurriculum.php"); $clsCurriculum = new Curriculum();
include ("classe/classDicas.php"); $clsDicas = new Dicas();

?>		


<!DOCTYPE HTML>
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Pós Graduação</title>
          <link href="css/estilo.css" rel="stylesheet">
          <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">   
          <link rel="stylesheet" type="text/css" href="css/datepicker.css">
          <link rel="stylesheet" type="text/css" href="js/jquery.ui.datepicker-pt-BR.js"/>
          <link rel="stylesheet" type="text/css" href="js/css/ui/smoothness/jquery-ui-1.7.1.custom.css"/>
          <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
          <script type="text/javascript" src="js/jquery-ui-1.8.24.custom.min.js"></script>
          <script type="text/javascript" src="js/datepicker.js"></script>
          <script type="text/javascript" src="js/cidades-estados-v0.2.js"></script> 
     <body >
          <div id="geral" style=" margin-left:10px; "></div>
          <div class="cabecalho">
               <h1> Área Administrativa </h1> 
          </div>
          <hr/>
          <div class="row" >
               <div class="col-md-4" style="width:200px !important;"><?php
                    include 'menu.php';
                    ?>
               </div>
               <div class="col-md-8">
                    <?php
                    if (
                            $_GET['pagina'] == "acaoartigos" ||
                            $_GET['pagina'] == "acaovideos" ||
                            $_GET['pagina'] == "acaousuarios" ||
                            $_GET['pagina'] == "acaocurso" ||
                            $_GET['pagina'] == "acaoeventos" ||
                            $_GET['pagina'] == "acaotrabalhos" ||
                            $_GET['pagina'] == "acaocurriculum" ||
                            $_GET['pagina'] == "acaodicas" ||
                            $_GET['pagina'] == "cadartigos" ||
                            $_GET['pagina'] == "cadvideo" ||
                            $_GET['pagina'] == "cadusuarios" ||
                            $_GET['pagina'] == "cadcursos" ||
                            $_GET['pagina'] == "cadeventos" ||
                            $_GET['pagina'] == "cadtrabalhos" ||
                            $_GET['pagina'] == "cadanexotrabalhos" ||
                            $_GET['pagina'] == "cadcurriculum" ||
                            $_GET['pagina'] == "cadcurriculumacademico" ||
                            $_GET['pagina'] == "cadcurriculumprofissional" ||
                            $_GET['pagina'] == "caddicas" ||
                            $_GET['pagina'] == "listaartigos" ||
                            $_GET['pagina'] == "listavideo" ||
                            $_GET['pagina'] == "listausuarios" ||
                            $_GET['pagina'] == "listacursos" ||
                            $_GET['pagina'] == "listaeventos" ||
                            $_GET['pagina'] == "listatrabalhos" ||
                            $_GET['pagina'] == "listacurriculum" ||
                            $_GET['pagina'] == "listadicas" ||
                            $_GET['pagina'] == "editarartigos" ||
                            $_GET['pagina'] == "editarusuarios" ||
                            $_GET['pagina'] == "editarvideo" ||
                            $_GET['pagina'] == "editarcurso" ||
                            $_GET['pagina'] == "editareventos" ||
                            $_GET['pagina'] == "editartrabalhos" ||
                            $_GET['pagina'] == "editarcurriculum" ||
                            $_GET['pagina'] == "editardicas" ||
                            $_GET['pagina'] == "principal"
                    ) {
                         require_once ($_GET['pagina'] . ".php");
                    } else {
                         require_once ("tela_inicial.php");
                    }
                    ?>      
               </div>
          </div>

     </body>
</html>