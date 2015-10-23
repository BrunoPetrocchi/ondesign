<script type="text/javascript" src="js/scripts.js"></script>
<a href="?pagina=listaeventos"><input type="submit" value="Voltar" class="btnmenu" style="float:right" /></a>
<br/><br/>
<form method="post" name="cadeventos" class="cadeventos" action="?pagina=acaocurriculum&acao=cadastrar">
     <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
               <div class="panel panel-default">
                    <div class="panel-heading">
                         <h3 class="panel-title"  placeholder="Eventos">Cadastrar Curriculum</h3>
                    </div>
                    <div class="panel-body">  
                         <div class="row">
                              <h3>Dados Pessoais</h3>
                              <br/>
                              <div class="col-lg-12"> 
                                   <div class="form-group">
                                        <label class="control-label">Nome</label>
                                        <input type="text" id="txtNome" name="txtNome" class="form-control"  placeholder="Informe o nome do evento"></input>
                                   </div> 
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-lg-6"> 
                                   <div class="form-group">
                                        <label class="control-label" >Data de Nascimento</label>
                                        <input type="text" id="datepicker" name="datepicker" class="form-control datas" placeholder="Insira a data"></input>
                                   </div>
                              </div>
                              <div class="col-lg-6"> 
                                   <div class="form-group">
                                        <label class="control-label">Estado Civil</label>
                                        <input type="text" id="civil" name="civil" class="form-control" placeholder="Insira o estado civil"></input>
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-lg-12"> 
                                   <div class="form-group">
                                        <label class="control-label" >E-mail</label>
                                        <input type="text" id="email" name="email" class="form-control" placeholder="Insira o e-mail"></input>
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-lg-6"> 
                                   <div class="form-group">
                                        <label class="control-label">Telefone Fixo</label>
                                        <input type="text" id="fixo" name="fixo" class="form-control " placeholder="Insira o nº do telefone fixo"></input>
                                   </div>
                              </div>
                              <div class="col-lg-6"> 
                                   <div class="form-group">
                                        <label class="control-label">Telefone  Celular</label>
                                        <input type="text" id="celular" name="celular" class="form-control" placeholder="Insira o nº do telefone celular"></input>
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-lg-12"> 
                                   <div class="form-group">
                                        <label class="control-label" >Cidade</label>
                                        <input type="text" id="cidade" name="cidade" class="form-control"  placeholder="Insira a cidade"></input>
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-lg-6"> 
                                   <div class="form-group">
                                        <label class="control-label" >Cursos separados por ;</label>
                                        <textarea id="cursos" rows="3" name="cursos" class=" form-control"></textarea>
                                   </div>
                              </div>
                              <div class="col-lg-6"> 
                                   <div class="form-group">
                                        <label class="control-label" >Seminarios separados por ; </label>
                                        <textarea id="seminario" rows="3" name="seminario" class=" form-control"></textarea>
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-lg-6"> 
                                   <div class="form-group">
                                        <label class="control-label" >Treinamentos separados por ;</label>
                                        <textarea id="treinamentos" rows="3" name="treinamentos" class=" form-control"></textarea>
                                   </div>
                              </div>
                              <div class="col-lg-6"> 
                                   <div class="form-group">
                                        <label class="control-label" >Idiomas separados por  ;</label>
                                        <textarea id="idioma" rows="3" name="idioma" class=" form-control"></textarea>
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