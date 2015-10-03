
<?php
$VarListaEventos = $clsEventos -> ListaEventos();
?>
<h2>Eventos</h2>
<a href="?pagina=cadeventos"><input type="submit" value="Cadastrar" class="btnmenu" style="float:right" /></a>
<br/><br/>
<form method="post" name="listaeventos" id="listaeventos">
    <!-- <input type="text" class="form-control" placeholder="Consultar Fisioterapeuta" id="pesquisar" name="pesquisar">
     <br/>-->
     <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
          <thead>
               <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Data</th>
                    <th>Opções</th>
               </tr>
          </thead>
          <?php
          for ($i = 0; $i < count($VarListaEventos); $i++) {
               ?>
               <tbody border="solid 1px" bordercolor="#FFFFFF">
                    <tr>
                         <td><?php echo $VarListaEventos [$i]['IDEVENTO']; ?></td>
                         <td><?php echo $VarListaEventos [$i]['NOME']; ?></td>
                         <td><?php echo $VarListaEventos [$i]['DATA']; ?></td>
                         <td><a href="#" onclick="javascript:confirmar(<?= $VarListaEventos[$i]['IDEVENTO']; ?>)" title="Apagar" ><img src="img/apagar.png" /></a>

                              <a href="?pagina=editareventos&id=<?php echo $VarListaEventos[$i]['IDEVENTO']; ?>"  title="Visualizar"><img src="img/visualizar.png" /></a>
                             

                         </td>
                    </tr>
               </tbody>

               <?php
          }
          ?>

     </table>
     <br/>
     Total de <strong><?php echo count($VarListaEventos); ?></strong> Eventos Ativos.
     <br/>
</form>
<script type="text/javascript">
     function confirmar(codigo_evento) { // pode ser qualquer nome
          if (confirm("Deseja Realmente Excluir?")) {
               window.location = "?pagina=acaoeventos&acao=excluir&id=" + codigo_evento; // pode ser qualquer nome
               return true;
          } else {
               return false;
          }
     }
</script>

