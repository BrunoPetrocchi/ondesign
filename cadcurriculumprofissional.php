<script type="text/javascript" src="js/scripts.js"></script>
<a href="?pagina=listaeventos"><input type="submit" value="Voltar" class="btnmenu" style="float:right" /></a>
<br/><br/>
<form method="post" name="cadeventos" class="cadeventos" action="?pagina=acaoeventos&acao=cadastrar">
     <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
               <div class="panel panel-default">
                    <div class="panel-heading">
                         <h3 class="panel-title"  placeholder="Eventos">Cadastrar Curriculum - Experiência Profissional</h3>
                    </div>
                    <div class="panel-body">  
                        <div class="row">
                              <div class="col-lg-6"> 
                                   <div class="form-group">
                                        <label class="control-label" >Pedíodo Inicial</label>
                                        <input type="text" id="datepicker" name="datepicker" class="form-control datas" placeholder="Insira o periodo inicial"></input>
                                   </div>
                              </div>
                              <div class="col-lg-6"> 
                                   <div class="form-group">
                                        <label class="control-label">Pedíodo Final</label>
                                        <input type="text" id="datepicker" name="datepicker" class="form-control" placeholder="Insira o periodo final"></input>
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-lg-12"> 
                                   <div class="form-group">
                                        <label class="control-label" >Cidade</label>
                                        <input type="text" id="formacao" name="formacao" class="form-control" placeholder="Insira a cidade"></input>
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-lg-12"> 
                                   <div class="form-group">
                                        <label class="control-label" >Setor</label>
                                        <input type="text" id="setor" name="setor" class="form-control" placeholder="Insira o setor"></input>
                                   </div>
                              </div>
                         </div>
                          <div class="row">
                              <div class="col-lg-12"> 
                                   <div class="form-group">
                                        <label class="control-label" >Cargo</label>
                                        <input type="text" id="cargo" name="cargo" class="form-control" placeholder="Insira o cargo"></input>
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-lg-12"> 
                                   <div class="form-group">
                                        <label class="control-label" >Atividades</label>
                                        <input type="text" id="atividades" name="atividades" class="form-control" placeholder="Insira as atividades"></input>
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