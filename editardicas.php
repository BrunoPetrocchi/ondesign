<?php
     $VarEditarDicas = $clsDicas -> EditarDicas ($_GET['id']);
  //   echo '<pre>'; print_r($VarEditarDicas);echo '</pre>';
?>

<form method="post" name="frmdicas" id="frmdicas" action="?pagina=acaodicas&acao=cadastrar">
     <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
               <div class="panel panel-default">
                    <div class="panel-heading">
                         <h3 class="panel-title">Cadastrar Dicas</h3>
                    </div>
                    <div class="panel-body">  
                         <div class="row">
                              <div class="col-md-12">
                                   <div class="form-group">
                                        <label for="nome">Curso</label>
                                        <select class="form-control" id="selcursos" name="selcursos">
                                             <option value="">Selecione</option>
                                             <?php
                                             $VarConsultaCurso = $clsCurso->ExibirCursos();
                                             for ($i = 0; $i < count($VarConsultaCurso); $i++) {
                                                  ?>
                                                  <option value="<?php echo $VarConsultaCurso [$i]['IDCURSO']; ?>"<?php echo $VarConsultaCurso [$i]['IDCURSO'] == $VarEditarDicas [0]['IDCURSO'] ? 'selected="selected"' : '' ?>
                                                       <?php echo $VarConsultaCurso [$i]['NOME']; ?>
                                                  </option>
                                                  <?php
                                             }
                                             ?>
                                        </select>
                                   </div>
                              </div>
                              <div class="col-lg-12"> 
                                   <div class="form-group">
                                        <label class="control-label">Titulo</label>
                                        <input type="titulo" id="titulo" name="titulo" class="form-control" value="<?php echo $VarEditarDicas [0]['TITULO']; ?>"></input>
                                   </div> 

                                   <div class="form-group">
                                        <label class="control-label" >Data do Cadastro</label>
                                        <input type="text" id="datepicker" name="datepicker" class="form-control datas" value="<?php echo $VarEditarDicas [0]['DATA']; ?>"></input>
                                   </div>
                                   <div class="form-group">
                                        <label class="control-label" >Descrição</label>
                                        <textarea id="descricao" rows="3" name="descricao" class=" form-control"><?php echo $VarEditarDicas [0]['DETALHE']; ?></textarea>
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