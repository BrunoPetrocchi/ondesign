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

$nome_final = '00' . '_' . renomearArquivo($_FILES['anexo']['name']);
if ($_GET['acao'] == 'cadastrar') {
     $VarInserirTrabalhos = $clsTrabalhos->CadTrabalhos($_POST['nome'], $_POST['autor'], $_POST['datepicker'], $nome_final);
     if ($VarInserirTrabalhos == 1) {
          $VarMaxTrabalhos = $clsTrabalhos->ExibirTrabalhosMax();
          mkdir("./anexos/anexo_tc/" . $VarMaxTrabalhos [0]['ULTIMO'], 0777);
          echo '<br/><br/><br/>';
          //print_r($_FILES['anexo']['name']);
          if (isset($_FILES["anexo"]["name"])) {
               (move_uploaded_file($_FILES['anexo']['tmp_name'], "./anexos/anexo_tc/" . $VarMaxTrabalhos [0]['ULTIMO'] . "/" . $nome_final));
          }
     }
     echo '<script>alert("Trabalho Científico Salvo com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=listatrabalhos'; </script>";
}
?>

<?php

if ($_GET['acao'] == 'cadastrar_anexo') {
     $trabalhos = time() . '_' . renomearArquivo($_FILES['anexo']['name']);
     $VarInserirAnexoTrabalhos = $clsTrabalhos->InserirAnexoTrabalhos($trabalhos);
     if ($VarInserirAnexoTrabalhos == 1) {
          (move_uploaded_file($_FILES['anexo']['tmp_name'], "./anexos/anexo_tc/" . $_GET['id'] . "/" . $trabalhos));
     }
     exit();
     echo '<script>alert("Anexo Trabalho Científico Salvo com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=listatrabalhos'; </script>";
}
?>

<?php

if ($_GET['acao'] == 'editar') {
     $VarEditarTrabalhos = $clsTrabalhos->EditarTrabalhos($_GET['id'], $_POST['nome'], $_POST['email'], $_POST['datepicker']);
     //exit();
     echo '<script>alert("Usuario Alterado com Sucesso");</script>';
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
          alert("Exclusão Efetuada com Sucesso!");
          document.location.href = '?pagina=listatrabalhos';
     </script>

     <?php

}
?> 