<?php
$VarExibirTrabalhos = $clsTrabalhos->ExibirTrabalhosId($_GET['id']);
?>
<script type="text/javascript" src="js/scripts.js"></script>
<a href="?pagina=listatrabalhos"><input type="submit" value="Voltar" class="btnmenu" style="float:right" /></a>
<br/><br/>
<form method="post" name="editartrabalhos" class="editartrabalhos" action="?pagina=acaotrabalhos&acao=editar&id=<?php echo $VarExibirTrabalhos [0]['IDTRABALHOCIENTIFICO']; ?>">
     <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
               <div class="panel panel-default">
                    <div class="panel-heading">
                         <h3 class="panel-title" placeholde="Eventos">Editar Trabalhos Científico</h3>
                    </div>
                    <div class="panel-body">  
                         <div class="row">
                              <div class="col-lg-12"> 
                                   <div class="form-group">
                                        <label class="control-label">Titulo</label>
                                        <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $VarExibirTrabalhos [0]['TITULO']; ?>"></input>
                                   </div> 

                                   <div class="form-group">
                                        <label class="control-label">Autor</label>
                                        <input type="text" id="email" name="email" class="form-control" value="<?php echo $VarExibirTrabalhos [0]['AUTOR']; ?>"></input>
                                   </div> 
                                   <div class="form-group">
                                        <label class="control-label">Data</label>
                                        <input type="text" id="datepicker" name="datepicker" class="form-control" value="<?php echo $VarExibirTrabalhos [0]['DATA_TRABALHO']; ?>"></input>
                                   </div> 
                              </div>
                         </div>
                    </div>
                    <div class="panel-footer">
                         <input type="submit" id="btnSalvar" value="Salvar" class="btn btn-primary" placeholde="Salvar" />
                    </div>
               </div>
          </div>
     </div>
</form>

<hr/>
<br/><br/>
<?php
$VarAnexoTrabalhoCientifico = $clsTrabalhos -> ExibirAnexoTrabalhoCientifico($_GET['id']);
?>
<a href="?pagina=cadanexotrabalhos"><input type="submit" value="Anexar" class="btnmenu" style="float:right" /></a>
<br/><br/>
<form method="post" name="listaanexotrabalho" id="listaanexotrabalho">
      <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
          <thead>
               <tr>
                    <th>Código Anexo</th>
                    <th>Anexo</th>
                    <th>Opções</th>
               </tr>
          </thead>
          <?php
          for ($i = 0; $i < count($VarAnexoTrabalhoCientifico); $i++) {
               ?>
               <tbody border="solid 1px" bordercolor="#FFFFFF">
                    <tr>
                         <td><?php echo $VarAnexoTrabalhoCientifico [$i]['IDANEXOTC']; ?></td>
                         <td><?php echo $VarAnexoTrabalhoCientifico [$i]['NOME']; ?></td>
                         <td><a href="#" onclick="javascript:confirmar(<?= $VarExibirAnexoLista[$i]['IDTRABALHOCIENTIFICO']; ?>)" title="Apagar" ><img src="img/apagar.png" /></a>

                              <a href="?pagina=cadanexotrabalhos&codigo=<?php echo $VarExibirAnexoLista[$i]['IDTRABALHOCIENTIFICO']; ?>"  title="Visualizar"><img src="img/visualizar.png" /></a>

                         </td>
                    </tr>
               </tbody>

               <?php
          }
          ?>
          
     </table>
     <br/><br/><br/><br/>     
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
