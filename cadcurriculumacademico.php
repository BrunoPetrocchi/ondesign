<script type="text/javascript" src="js/scripts.js"></script>
<a href="?pagina=listacurriculum"><input type="submit" value="Voltar" class="btnmenu" style="float:right" /></a>
<br/><br/>
<form method="post" name="cadacademico" class="cadacademico" action="?pagina=acaocurriculum&acao=cadastrar">
     <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
               <div class="panel panel-default">
                    <div class="panel-heading">
                         <h3 class="panel-title"  placeholder="Eventos">Cadastrar Curriculum - Acad�mico</h3>
                    </div>
                    <div class="panel-body">  
                        <div class="row">
                              <div class="col-lg-6"> 
                                   <div class="form-group">
                                        <label class="control-label" >Ped�odo Inicial</label>
                                        <input type="text" id="datepicker" name="datepicker" class="form-control datas" placeholder="Insira o periodo inicial"></input>
                                   </div>
                              </div>
                              <div class="col-lg-6"> 
                                   <div class="form-group">
                                        <label class="control-label">Ped�odo Final</label>
                                        <input type="text" id="civil" name="civil" class="form-control" placeholder="Insira o periodo final"></input>
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-lg-12"> 
                                   <div class="form-group">
                                        <label class="control-label" >Tipo Forma��o</label>
                                        <input type="text" id="formacao" name="formacao" class="form-control" placeholder="Insira o tipo de forma��o"></input>
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-lg-12"> 
                                   <div class="form-group">
                                        <label class="control-label" >Institui��o</label>
                                        <input type="text" id="instituicao" name="instituicao" class="form-control" placeholder="Insira o tipo de forma��o"></input>
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-lg-12"> 
                                   <div class="form-group">
                                        <label class="control-label" >Atua��o</label>
                                        <input type="text" id="cidade" name="cidade" class="form-control"  placeholder="Insira a cidade"></input>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="panel-footer">
                    <input type="submit" id="btnSalvar" value="Salvar" class="btn btn-primary"  placeholder="Salvar" />
               </div>
          </div>
     </div>
</div>
</form>