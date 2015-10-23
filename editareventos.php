<?php
$VarExibeEventosId = $clsEventos->ConsultaEventosId($_GET['id']);
?>
<a href="?pagina=listaeventos"><input type="submit" value="Cadastrar" class="btnmenu" style="float:right" /></a>
<br/><br/>
<form method="post" name="frmeventos" id="frmeventos" action="?pagina=acaoeventos&acao=alterar&id=<?php echo $VarExibeEventosId [0]['IDEVENTO']; ?>">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" placeholde="Eventos">Editar Eventos</h3>
                </div>
                <div class="panel-body">  
                    <div class="row">
                        <div class="col-lg-12"> 
                            <div class="form-group">
                                <label class="control-label">Nome</label>
                                <input type="text" id="txtNome" name="txtNome" class="form-control" value="<?php echo $VarExibeEventosId [0]['NOME']; ?>"></input>
                            </div> 

                            <div class="form-group">
                                <label class="control-label" >Data</label>
                                <input type="text" id="datepicker" name="datepicker" class="form-control datas" value="<?php echo $VarExibeEventosId [0]['DATA']; ?>"></input>
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
<br/><br/>
<?php
$VarExibirAnexoEventos = $clsEventos->ListaAnexoEventos($_GET['id']);
?>
<a href="?pagina=cadanexoeventos&codigo=<?php echo $_GET['id']?>"><input type="submit" value="Anexar" class="btnmenu" style="float:right" /></a>
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
          for ($i = 0; $i < count($VarExibirAnexoEventos); $i++) {
               ?>
               <tbody border="solid 1px" bordercolor="#FFFFFF">
                    <tr>
                         <td><?php echo $VarExibirAnexoEventos [$i]['IDEVENTO']; ?></td>
                         <td><?php echo $VarExibirAnexoEventos [$i]['NOME']; ?></td>
                         <td><a href="#" onclick="javascript:confirmar(<?= $VarExibirAnexoEventos[$i]['IDEVENTO']; ?>)" title="Apagar" ><img src="img/apagar.png" /></a>

                              <a href="./anexos/eventos/<?php echo $_GET['id']; ?>/<?php echo $VarExibirAnexoEventos[0]['NOME']; ?>"  title="Visualizar" target="_blank"><img src="img/visualizar.png" /></a>
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
     function confirmar(codigo_anexo) { // pode ser qualquer nome
          if (confirm("Deseja Realmente Excluir?")) {
               window.location = "?pagina=acaotrabalhos&acao=apagar_anexo&id=" + codigo_anexo; // pode ser qualquer nome
               return true;
          } else {
               return false;
          }
     }
</script>