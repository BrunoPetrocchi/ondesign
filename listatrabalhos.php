<?php
$VarExibeTrabalhos = $clsTrabalhos->ExibirTrabalhos();
?>
<h2>Lista Trabalhos Científico</h2>
<a href="?pagina=cadtrabalhos"><input type="submit" value="Cadastrar" class="btnmenu" style="float:right" /></a>
<br/><br/>
<form method="post" name="listausuarios" id="listausuarios">
    <!-- <input type="text" class="form-control" placeholder="Consultar Fisioterapeuta" id="pesquisar" name="pesquisar">
     <br/>-->
     <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
          <thead>
               <tr>
                    <th>Código</th>
                    <th>Autor</th>
                    <th>Data</th>
                    <th>Anexo</th>
                    <th>Opções</th>
               </tr>
          </thead>
          <?php
          for ($i = 0; $i < count($VarExibeTrabalhos); $i++) {
               ?>
               <tbody border="solid 1px" bordercolor="#FFFFFF">
                    <tr>
                         <td><?php echo $VarExibeTrabalhos [$i]['IDTRABALHOCIENTIFICO']; ?></td>
                         <td><?php echo $VarExibeTrabalhos [$i]['AUTOR']; ?></td>
                         <td><?php echo $VarExibeTrabalhos [$i]['DATA_TRABALHO']; ?></td>
                         <td>
                              <?php
                              if ($VarExibeTrabalhos [0]['ANEXO'] == 0) {
                                   ?>
                                   <img src="img/arquivo_off.png"/>
                                   <?php
                              }else{
                                   ?>
                                   <img src="img/arquivo.png"/>
                                   <?php
                              }
                              ?>
                         </td>
                         <td><a href="#" onclick="javascript:confirmar(<?= $VarExibeTrabalhos[$i]['IDTRABALHOCIENTIFICO']; ?>)" title="Apagar" ><img src="img/apagar.png" /></a>

                              <a href="?pagina=editartrabalhos&id=<?php echo $VarExibeTrabalhos[$i]['IDTRABALHOCIENTIFICO']; ?>"  title="Visualizar"><img src="img/visualizar.png" /></a>


                         </td>
                    </tr>
               </tbody>

               <?php
          }
          ?>

     </table>
     <br/>
     Total de <strong><?php echo count($VarExibeTrabalhos); ?></strong> Usuarios Ativos.
     <br/>
</form>
<script type="text/javascript">
     function confirmar(codigo_usuario) { // pode ser qualquer nome
          if (confirm("Deseja Realmente Excluir?")) {
               window.location = "?pagina=acaotrabalhos&acao=excluir&id=" + codigo_usuario; // pode ser qualquer nome
               return true;
          } else {
               return false;
          }
     }
</script>
