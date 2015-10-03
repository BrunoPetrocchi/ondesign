<?php

if ($_GET['acao'] == 'cadastrar') {
    $VarInserirVideo = $clsVideos->CadVideos($_POST['txtTitulo'], $_POST['txtLink']);
    //exit();
    echo '<script>alert("Vídeo Salvo com Sucesso");</script>';
    echo "<script type='text/javascript'>window.location='?pagina=listavideo'; </script>";
}
?>


<?php
if ($_GET['acao'] == 'editar') {
    $VarEditarVideo = $clsVideos->EditarVideos($_GET['id'], $_POST['txtTitulo'], $_POST['txtLink']);
   // exit();
    echo '<script>alert("Video Alterado com Sucesso");</script>';
    echo "<script type='text/javascript'>window.location='?pagina=listavideo'; </script>";
}
else
{
     echo '<script>alert("ERRO");</script>'; 
}
?>

<?php

if ($_GET['acao'] == 'excluir') {
     $VarExcluirVideos = $clsVideos->ApagarVideos($_GET['id']);
}
if ($VarExcluirVideos == 1) {
     ?>    
     <script type="text/javascript">
          alert("Exclusão Efetuada com Sucesso!");
          document.location.href = '?pagina=listavideo';
     </script>

     <?php

}
?> 
