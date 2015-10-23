<?php
$ExibirCurriculum = $clsCurriculum ->ExibirArtigos();
?>
<h2>Lista Curriculum Profissional</h2>
<a href="?pagina=cadcurriculum"><input type="submit" value="Cadastrar" class="btnmenu" style="float:right" /></a>
<br/><br/>
<form method="post" name="listausuarios" id="listausuarios">
    <!-- <input type="text" class="form-control" placeholder="Consultar Fisioterapeuta" id="pesquisar" name="pesquisar">
     <br/>-->
     <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
          <thead>
               <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Tel. Fixo</th>
                    <th>Tel. Celular</th>
                    <th>Cidade</th>
                    <th>Opções</th>
               </tr>
          </thead>
          <?php
          for ($i = 0; $i < count($ExibirCurriculum); $i++) {
               ?>
               <tbody border="solid 1px" bordercolor="#FFFFFF">
                    <tr>
                         <td><?php echo $ExibirCurriculum [$i]['IDCURRICULO']; ?></td>
                         <td><?php echo $ExibirCurriculum [$i]['NOME']; ?></td>
                         <td><?php echo $ExibirCurriculum [$i]['TELEFONERESIDENCIAL']; ?></td>
                         <td><?php echo $ExibirCurriculum [$i]['TELEFONECELULAR']; ?></td>
                         <td><?php echo $ExibirCurriculum [$i]['CIDADE']; ?></td>
                         <td><a href="#" onclick="javascript:confirmar(<?= $ExibirCurriculum[$i]['IDUSUARIO']; ?>)" title="Apagar" ><img src="img/apagar.png" /></a>
                             <a href="?pagina=editarcurriculum&id=<?php echo $ExibirCurriculum[$i]['IDUSUARIO']; ?>"  title="Visualizar"><img src="img/visualizar.png" /></a>
                             <a href="?pagina=editarcurriculumacademico" title="Visualizar Academico"><img src="img/diplomaoff.png"/></a>
                             <a href="?pagina=editarcurriculumprofissional" title="Visualizar Profissional"><img src="img/profoff.png"/></a>
                            
                         </td>
                    </tr>
               </tbody>

               <?php
          }
          ?>

     </table>
     <br/>
     Total de <strong><?php echo count($ExibirCurriculum); ?></strong> Usuarios Ativos.
     <br/>
</form>
<script type="text/javascript">
     function confirmar(codigo_usuario) { // pode ser qualquer nome
          if (confirm("Deseja Realmente Excluir?")) {
               window.location = "?pagina=acaousuarios&acao=excluir&id=" + codigo_usuario; // pode ser qualquer nome
               return true;
          } else {
               return false;
          }
     }
</script>
