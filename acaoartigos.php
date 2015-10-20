<?php
    if ($_GET['acao'] == 'cadastrar') {
    $VarInserirArtigos = $clsArtigos->CadArtigos( $_POST['txtTitulo'], $_POST['txtAutor'], $_POST['datepicker'], $_POST['txtDescricao']);

   //exit();

    echo '<script>alert("Artigo Salvo com Sucesso");</script>';
    echo "<script type='text/javascript'>window.location='?pagina=listaartigos'; </script>";
}


if ($_GET['acao'] == 'editar') {
    $VarAlterarArtigos = $clsArtigos->EditarArtigos($_GET['id'], $_POST['txtTitulo'], $_POST['txtAutor'], $_POST['datepicker'], $_POST['txtDescricao']);
    //exit();
    echo '<script>alert("Evento Alterado com Sucesso");</script>';
    echo "<script type='text/javascript'>window.location='?pagina=listaartigos'; </script>";
}



if ($_GET['acao'] == 'excluir') {
     $VarExcluirArtigo = $clsArtigos->ApagarArtigos($_GET['id']);
}

if ($VarExcluirArtigo == 1) {
  ?>
     <script type="text/javascript">
          alert("Exclusão Efetuada com Sucesso!");
          document.location.href = '?pagina=listaartigos';
     </script>

     <?php

}
?> 