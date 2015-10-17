<?php
$VarExibirArtigos = $clsArtigos->ExibirArtigos();
?>
<a href="?pagina=artigo"><input type="submit" value="Cadastrar" class="btnmenu" style="float:right" /></a>
<br/><br/>
<table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
     <thead>
          <tr>
               <th>Id</th>
               <th>Título</th>
               <th>Autor</th>
               <th>Data</th>
               <th>Descrição</th>
               <th>Opção</th>
          </tr>
     </thead>
     <?php
     for ($i = 0; $i < count($VarExibirUsuarios); $i++) {
          ?>
          <tbody border="solid 1px" bordercolor="#FFFFFF">
               <tr>
                    <td><?php echo $VarExibirArtigos[$i]['IDARTIGO']; ?></td>
                    <td><?php echo $VarExibirArtigos[$i]['TITULO']; ?></td>
                    <td><?php echo $VarExibirArtigos[$i]['AUTOR']; ?></td>
                    <td><?php echo $VarExibirArtigos[$i]['DATA']; ?></td>
                    <td><?php echo $VarExibirArtigos[$i]['ARTIGO']; ?></td>

                    <td>  <a href="?pagina=editaartigoss&id=<?php echo $VarExibirArtigos[$i]['IDARTIGO']; ?>"  title="Visualizar">Visualizar</a></td>

               </tr>
          </tbody>
          <?php
     }
     ?>

</table>