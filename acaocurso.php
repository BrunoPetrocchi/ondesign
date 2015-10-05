<?php

if ($_GET['acao'] == 'cadastrar') {
    $VarInserirCurso = $clsCurso->CadCurso($_SESSION["IDUSUARIO"], $_POST['txtNome'],
            $_POST['ddlnivel'], $_POST['ddlAtivo'], $_POST['txtPublicoAlvo'],
            $_POST['txtObjetivo'], $_POST['txtPossibilidadesProfissionais'], $_POST['txtEstruturaOferecida'],
            $_POST['txtModulos'], $_POST['txtDuracao'], $_POST['txtInicio'],
            $_POST['txtHorario'], $_POST['txtTurmaMinima'], $_POST['txtRequisitos'],
            $_POST['txtEmbasamentoLegal'], $_POST['txtInvestimento'], $_POST['txtObservacao'],
            $_POST['txtConvenios'], $_POST['txtPortariaMEC']);
    //exit();
    echo '<script>alert("Curso Salvo com Sucesso");</script>';
    echo "<script type='text/javascript'>window.location='?pagina=listacursos'; </script>";
}

if ($_GET['acao'] == 'listar') {
    $VarInserirCurso = $clsCurso->ExibirCursos();
    //exit();
    echo '<script>alert("Curso Salvo com Sucesso");</script>';
    echo "<script type='text/javascript'>window.location='?pagina=listacursos'; </script>";
}

if ($_GET['acao'] == 'listar') {
    
}
