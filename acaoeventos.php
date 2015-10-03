<?php
    if ($_GET['acao'] == 'cadastrar') {
    $VarInserirEventos = $clsEventos->CadastrarEventos($_POST['txtNome'], $_POST['datepicker']);
    exit();
    echo '<script>alert("Evento Salvo com Sucesso");</script>';
    echo "<script type='text/javascript'>window.location='?pagina=listaeventos'; </script>";
}
?>

<?php
   if ($_GET['acao'] == 'alterar') {
    $VarAlterarEventos = $clsEventos->AlterarEventos($_GET['id'], $_POST['txtNome'], $_POST['datepicker']);
    //exit();
    echo '<script>alert("Evento Alterado com Sucesso");</script>';
    echo "<script type='text/javascript'>window.location='?pagina=listaeventos'; </script>";
}
?>

<?php

if ($_GET['acao'] == 'excluir') {
     $VarExcluirEventos = $clsEventos->ApagarEventos($_GET['id']);
}
if ($VarExcluirEventos == 1) {
     ?>    
     <script type="text/javascript">
          alert("Exclusão Efetuada com Sucesso!");
          document.location.href = '?pagina=listaeventos';
     </script>

     <?php

}
?> 