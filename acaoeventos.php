<?php

function renomearArquivo($string) {
     $string = trim($string);
     $a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:,\\\"<>';
     $b = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                             ';
     $string = strtr($string, $a, $b);
     $string = strip_tags(trim($string));
     $string = preg_replace('/\s(?=\s)/', '', $string);
     $string = preg_replace('/[\n\r\t]/', ' ', $string);
     $string = str_replace(" ", "_", $string);
     return strtolower($string);
}

$trabalhos = '00' . '_' . renomearArquivo($_FILES['anexo']['name']);
if ($_GET['acao'] == 'cadastrar') {
     $VarInserirEventos = $clsEventos->CadastrarEventos($_POST['txtNome'], $_POST['datepicker']);
     if ($VarInserirEventos == 1) {
          $VarMaxEventos = $clsEventos->EventosMaxId();
          mkdir("./anexos/eventos/" . $VarMaxEventos [0]['ULTIMO'], 0777);
          echo '<br/><br/><br/>';
          //print_r($_FILES['anexo']['name']);
          if (isset($_FILES["anexo"]["name"])) {
               (move_uploaded_file($_FILES['anexo']['tmp_name'], "./anexos/eventos/" . $VarMaxEventos [0]['ULTIMO'] . "/" . $trabalhos));
          }
     }
     echo '<script>alert("Evento Salvo com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=listaeventos'; </script>";
}
?>

<?php

if ($_GET['acao'] == 'cadastrar_anexo') {
     $trabalhos = time() . '_' . renomearArquivo($_FILES['anexo']['name']);
     $VarInserirEventosAnexo = $clsEventos->InserirAnexoEventos($_POST['codigo'], $trabalhos);
     if ($VarInserirEventosAnexo == 1) {
          (move_uploaded_file($_FILES['anexo']['tmp_name'], "./anexos/eventos/" . $_POST['codigo'] . "/" . $trabalhos));
     }
     //exit();
     echo '<script>alert("Foto Anexada com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=listaeventos&pagina=editareventos&id=$_POST[codigo]' </script>";
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

if ($_GET['acao'] == 'apagar_anexo') {
     $VarExcluirAnexo = $clsEventos->ApagarAnexoTrabalhos($_GET['id']);
     if (count($VarAnexoTrabalhoCientifico) == 1) {
          unlink("./anexos/eventos/" . $_POST['id'] . "/" . $VarAnexoTrabalhoCientifico[0]['NOME']);
     }
     echo "<script type='text/javascript'>alert('Excluido com sucesso!')</script>";
     echo "<script type='text/javascript'>window.location='?pagina=listaeventos&pagina=editareventos&id=$_POST[codigo]' </script>";
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