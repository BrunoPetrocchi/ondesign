<?php
$VarExibirDicas = $clsDicas->ExibirDicas();
?>
<h2>Lista Dicas</h2>
<a href="?pagina=caddicas"><input type="submit" value="Cadastrar" class="btnmenu" style="float:right" /></a>
<br/><br/>
<table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
     <thead>
          <tr>
               <th>Id</th>
               <th>Curso</th>
               <th>Titulo</th>
               <th>Opções</th>
          </tr>
     </thead>
     <?php
     for ($i = 0; $i < count($VarExibirDicas); $i++) {
          ?>
          <tbody border="solid 1px" bordercolor="#FFFFFF">
               <tr>
                    <td><?php echo $VarExibirDicas[$i]['IDDICA']; ?></td>
                    <td><?php echo $VarExibirDicas[$i]['CURSO']; ?></td>
                    <td><?php echo $VarExibirDicas[$i]['TITULO']; ?></td>
                    <td><a href="#" onclick="javascript:confirmar(<?= $VarExibirDicas[$i]['IDDICA']; ?>)" title="Apagar" ><img src="img/apagar.png" /></a>

                         <a href="?pagina=editardicas&id=<?php echo $VarExibirDicas[$i]['IDDICA']; ?>"  title="Visualizar"><img src="img/visualizar.png" /></a>


                    </td>
               </tr>
          </tbody>
          <?php
     }
     ?>
</table>
 <br/>
     Total de <strong><?php echo count($VarExibirDicas); ?></strong> Artigos Ativos.
     <br/>
<script type="text/javascript">
     function confirmar(codigo_usuario) { // pode ser qualquer nome
          if (confirm("Deseja Realmente Excluir?")) {
               window.location = "?pagina=acaoartigos&acao=excluir&id=" + codigo_usuario; // pode ser qualquer nome
               return true;
          } else {
               return false;
          }
     }
</script>