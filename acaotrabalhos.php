<?php
function renomearArquivo($string) {
     $string = trim($string);
     $a = '���������������������������������������������������������������Rr"!@#$%&*()_-+={[}]/?;:,\\\"<>';
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
     $VarInserirTrabalhos = $clsTrabalhos->CadTrabalhos($_POST['selcursos'],$_POST['nome'], $_POST['autor'], $_POST['datepicker'], $trabalhos);
     if ($VarInserirTrabalhos == 1) {
          $VarMaxTrabalhos = $clsTrabalhos->ExibirTrabalhosMax();
          mkdir("./anexos/anexo_tc/" . $VarMaxTrabalhos [0]['ULTIMO'], 0777);
          echo '<br/><br/><br/>';
          //print_r($_FILES['anexo']['name']);
          if (isset($_FILES["anexo"]["name"])) {
               (move_uploaded_file($_FILES['anexo']['tmp_name'], "./anexos/anexo_tc/" . $VarMaxTrabalhos [0]['ULTIMO'] . "/" . $trabalhos));
          }
     }
     exit();
     echo '<script>alert("Trabalho Cient�fico Salvo com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=listatrabalhos'; </script>";
}
?>

<?php

if ($_GET['acao'] == 'cadastrar_anexo') {
     $trabalhos = time() . '_' . renomearArquivo($_FILES['anexo']['name']);
     $VarInserirAnexoTrabalhos = $clsTrabalhos->InserirAnexoTrabalhos($_POST['codigo'], $trabalhos);
     if ($VarInserirAnexoTrabalhos == 1) {
          (move_uploaded_file($_FILES['anexo']['tmp_name'], "./anexos/anexo_tc/" . $_POST['codigo'] . "/" . $trabalhos));
     }
     //exit();
     echo '<script>alert("Anexo Trabalho Cient�fico Salvo com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=listatrabalhos&pagina=editartrabalhos&id=$_POST[codigo]' </script>";
}
?>

<?php

if ($_GET['acao'] == 'editar') {
     $VarEditarTrabalhos = $clsTrabalhos->EditarTrabalhos($_GET['id'],$_POST['selcursos'], $_POST['nome'], $_POST['email'], $_POST['datepicker']);
     //exit();
     echo '<script>alert("Usuario Alterado com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=listatrabalhos'; </script>";
}
?>

<?php

if ($_GET['acao'] == 'apagar_anexo') {
     $VarExcluirAnexo = $clsTrabalhos->ApagarAnexoTrabalhos($_GET['id']);
     if (count($VarAnexoTrabalhoCientifico) == 1) {
          unlink("./anexos/anexo_tc/" . $_POST['id'] . "/" . $VarAnexoTrabalhoCientifico[0]['NOME']);
     }
     echo "<script type='text/javascript'>alert('Excluido com sucesso!')</script>";
     echo "<script type='text/javascript'>window.location='?pagina=listatrabalhos'; </script>";
}
?>


<?php

if ($_GET['acao'] == 'excluir') {
     $VarExcluirTrabalhos = $clsTrabalhos->ApagarTrabalhos($_GET['id']);
}

if ($VarExcluirTrabalhos == 1) {
     ?>    
     <script type="text/javascript">
          alert("Exclus�o Efetuada com Sucesso!");
          document.location.href = '?pagina=listatrabalhos';
     </script>

     <?php

}
?> 