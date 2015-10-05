<?php

if ($_GET['acao'] == 'cadastrar') {
     $VarInserirUsuario = $clsUsuarios->CadUsuarios($_POST['nome'], $_POST['email'], $_POST['senha']);
     //exit();
     echo '<script>alert("Usuario Salvo com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=listausuarios'; </script>";
}
?>

<?php

if ($_GET['acao'] == 'editar') {
     $VarEditarUsuarios = $clsUsuarios->EditarUsuario($_GET['id'], $_POST['nome'], $_POST['email'], $_POST['senha']);
     //exit();
     echo '<script>alert("Usuario Alterado com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=listausuarios'; </script>";
}
?>

<?php
if ($_GET['acao'] == 'excluir') {
     $VarExcluirUsuario = $clsUsuarios->ApagarUsuario($_GET['id']);
}

if ($VarExcluirUsuario == 1) {
     ?>    
     <script type="text/javascript">
          alert("Exclusão Efetuada com Sucesso!");
          document.location.href = '?pagina=listausuarios';
     </script>

     <?php

}
?> 