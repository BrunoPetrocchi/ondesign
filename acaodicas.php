<?php

if ($_GET['acao'] == 'cadastrar') {
    $VarInserirDicas = $clsDicas-> InserirDicas($_POST['selcursos'],$_POST['titulo'],$_POST['datepicker'],$_POST['descricao']);
   
   // exit();
    echo '<script>alert("Dicas Salvo com Sucesso");</script>';
    echo "<script type='text/javascript'>window.location='?pagina=listadicas'; </script>";
}

if ($_GET['acao'] == 'editar') { 
    $VarInserirDicas = $clsDicas->EditarDicas();
   // exit();
    echo '<script>alert("Curso Alterado com Sucesso");</script>';
    echo "<script type='text/javascript'>window.location='?pagina=listacursos'; </script>";
};

if ($_GET['acao'] == 'excluir') {
     $VarExcluirCurso = $clsCurso->ExcluirCurso($_GET['id']);
}

if ($VarExcluirCurso == 1) {
     ?>    
     <script type="text/javascript">
          alert("Exclusão Efetuada com Sucesso!");
          document.location.href = '?pagina=listacursos';
     </script>

     <?php

}
?> 