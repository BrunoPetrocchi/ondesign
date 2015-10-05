<?php

if ($_GET['acao'] == 'cadastrar') {
     $VarInserirTrabalhos = $clsTrabalhos->CadTrabalhos($_POST['nome'], $_POST['email'], $_POST['datepicker']);
     //exit();
     echo '<script>alert("Trabalho Científico Salvo com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=listatrabalhos'; </script>";
}
?>

<?php

if ($_GET['acao'] == 'editar') {
     $VarEditarTrabalhos = $clsTrabalhos->EditarTrabalhos($_GET['id'],$_POST['nome'], $_POST['email'], $_POST['datepicker']);
     //exit();
     echo '<script>alert("Usuario Alterado com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=listatrabalhos'; </script>";
}
?>

<?php
if ($_GET['acao'] == 'excluir') {
     $VarExcluirTrabalhos = $clsTrabalhos->ApagarTrabalhos($_GET['id']);
}

if ($VarExcluirTrabalhos == 1) {
     ?>    
     <script type="text/javascript">
          alert("Exclusão Efetuada com Sucesso!");
          document.location.href = '?pagina=listatrabalhos';
     </script>

     <?php

}
?> 