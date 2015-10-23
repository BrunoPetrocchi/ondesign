<?php
    if ($_GET['acao'] == 'cadastrar') {
    $VarInserirVagaEmprego = $clsVagaEmprego->CadastrarVagaEmprego($_POST['txtTitulo'], $_POST['txtEmpresa'], $_POST['txtCargo'], $_POST['txtDescricao'] );
    //exit();
    echo '<script>alert("Vaga de Emprego Salvo com Sucesso");</script>';
    echo "<script type='text/javascript'>window.location='?pagina=listavagaemprego'; </script>";
}
?>

<?php
    if ($_GET['acao'] == 'alterarvagaemprego') {
    $VarInserirVagaEmprego = $clsVagaEmprego->AlterarVagaEmprego($_GET['id'], $_POST['txtTitulo'], $_POST['txtEmpresa'], $_POST['txtCargo'], $_POST['txtDescricao'] );
    //exit();
    echo '<script>alert("Vaga de Emprego Salvo com Sucesso");</script>';
    echo "<script type='text/javascript'>window.location='?pagina=listavagaemprego'; </script>";
}
?>

<?php
   if ($_GET['acao'] == 'alterar') {
    $VarAlterarVagaEmprego = $clsVagaEmprego->AlterarVagaEmprego($_GET['id'], $_POST['txtTitulo'], $_POST['txtEmpresa'], $_POST['txtCargo'], $_POST['txtDescricao']);
    //exit();
    echo '<script>alert("Vaga de Emprego Alterado com Sucesso");</script>';
    echo "<script type='text/javascript'>window.location='?pagina=listavagaemprego'; </script>";
}
?>

<?php

if ($_GET['acao'] == 'excluir') {
     $VarExcluirVagaEmprego = $clsVagaEmprego->ApagarVagaEmprego($_GET['id']);
}
if ($VarExcluirVagaEmprego == 1) {
     ?>    
     <script type="text/javascript">
          alert("Exclusão Efetuada com Sucesso!");
          document.location.href = '?pagina=listavagaemprego';
     </script>

     <?php

}
?> 