<?php

if ($_GET['acao'] == 'cadastrar') {
    $VarInserirCurso = $clsCurso->CadCurso($_POST['usuarios'], $_POST['txtNome'],
            $_POST['txtnivel'],
            $_POST['txtpublico'], $_POST['txtObjetivo'],
            $_POST['txtPossibilidades'], $_POST['txtEstruturaOferecida'], $_POST['txtModulos'],
            $_POST['txtDuracao'], $_POST['txtInicio'], $_POST['txtHorario'],
            $_POST['txtTurmaMinima'], $_POST['txtRequisitos'], $_POST['txtEmbasamentoLegal'],
            $_POST['txtInvestimento'], $_POST['txtConvenios'], $_POST['txtPortariaMEC'],$_POST['txtObservacao']);
    //exit();
    echo '<script>alert("Curso Salvo com Sucesso");</script>';
    echo "<script type='text/javascript'>window.location='?pagina=listacursos'; </script>";
}

if ($_GET['acao'] == 'editar') { 
    $VarInserirCurso = $clsCurso->EditarCurso($_GET['id'], $_POST['txtusuarios'], $_POST['txtNome'],
            $_POST['ddlnivel'], 
            $_POST['txtPublicoAlvo'], $_POST['txtObjetivo'],
            $_POST['txtPossibilidadesProfissionais'], $_POST['txtEstruturaOferecida'], $_POST['txtModulos'],
            $_POST['txtDuracao'], $_POST['txtInicio'], $_POST['txtHorario'],
            $_POST['txtTurmaMinima'], $_POST['txtRequisitos'], $_POST['txtEmbasamentoLegal'],
            $_POST['txtInvestimento'], $_POST['txtConvenios'], $_POST['txtPortariaMEC'],$_POST['txtObservacao']);
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