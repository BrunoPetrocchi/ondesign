<?php
    if ($_GET['acao'] == 'cadastrar') {
    $VarInserirArtigos = $clsArtigos->CadArtigos($_POST['txtTitulo'], $_POST['txtAutor'], $_POST['txtData'], $_POST['txtDescricao']);
    
    echo '<script>alert("Artigo Salvo com Sucesso");</script>';
    echo "<script type='text/javascript'>window.location='?pagina=listaartigos'; </script>";
}
