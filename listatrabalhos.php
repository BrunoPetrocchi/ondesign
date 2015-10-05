<?php
$VarExibirUsuarios = $clsUsuarios->ExibirUsuarios();
?>
<h2>Lista Usuários</h2>
<a href="?pagina=cadusuarios"><input type="submit" value="Cadastrar" class="btnmenu" style="float:right" /></a>
<br/><br/>
<form method="post" name="listausuarios" id="listausuarios">
    <!-- <input type="text" class="form-control" placeholder="Consultar Fisioterapeuta" id="pesquisar" name="pesquisar">
     <br/>-->
     <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
          <thead>
               <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Opções</th>
               </tr>
          </thead>
          <?php
          for ($i = 0; $i < count($VarExibirUsuarios); $i++) {
               ?>
               <tbody border="solid 1px" bordercolor="#FFFFFF">
                    <tr>
                         <td><?php echo $VarExibirUsuarios [$i]['IDUSUARIO']; ?></td>
                         <td><?php echo $VarExibirUsuarios [$i]['NOME']; ?></td>
                         <td><?php echo $VarExibirUsuarios [$i]['EMAIL']; ?></td>
                         <td><a href="#" onclick="javascript:confirmar(<?= $VarExibirUsuarios[$i]['IDUSUARIO']; ?>)" title="Apagar" ><img src="img/apagar.png" /></a>

                              <a href="?pagina=editarusuarios&id=<?php echo $VarExibirUsuarios[$i]['IDUSUARIO']; ?>"  title="Visualizar"><img src="img/visualizar.png" /></a>
                             

                         </td>
                    </tr>
               </tbody>

               <?php
          }
          ?>

     </table>
     <br/>
     Total de <strong><?php echo count($VarExibirUsuarios); ?></strong> Usuarios Ativos.
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
