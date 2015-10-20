<?php

if ($_GET['acao'] == 'cadastrar') {
    $VarInserirCurso = $clsCurso->CadCurso($_POST['txtNome'],
            $_POST['txtnivel'], $_POST['txtusuarios'],
            $_POST['txtPublicoAlvo'], $_POST['txtObjetivo'],
            $_POST['txtPossibilidadesProfissionais'], $_POST['txtEstruturaOferecida'], $_POST['txtModulos'],
            $_POST['txtDuracao'], $_POST['txtInicio'], $_POST['txtHorario'],
            $_POST['txtTurmaMinima'], $_POST['txtRequisitos'], $_POST['txtEmbasamentoLegal'],
            $_POST['txtInvestimento'], $_POST['txtConvenios'], $_POST['txtPortariaMEC'],$_POST['txtObservacao']);
    exit();
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
