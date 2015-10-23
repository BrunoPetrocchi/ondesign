<script type="text/javascript" src="js/scripts.js"></script>
<a href="?pagina=listavagaemprego"><input type="submit" value="Voltar" class="btnmenu" style="float:right" /></a>
<br/><br/>
<form method="post" name="cadvagaemprego" class="cadvagaemprego" action="?pagina=acaovagaemprego&acao=cadastrar">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Vaga de Emprego</h3>
                </div>

                <div class="panel-body">  
                    <div class="row">
                        <div class="col-lg-12">  
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Título</label>
                                        <input type="text" id="txtTitulo" class="form-control" placeholder="Informe o Título" />
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Empresa</label>
                                        <input type="text" id="txtEmpresa" class="form-control" placeholder="Informe a Empresa" />
                                    </div>
                                </div>
                            </div>  
                            <div class="form-group">
                                <label class="control-label">Cargo</label>
                                <input type="text" id="txtCargo" class="form-control" placeholder="Informe o cargo" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Descrição</label>
                                <textarea type="text" id="txtDescricao" rows="6" class="form-control" placeholder="Descrição"></textarea>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="panel-footer">
                    <input type="submit" id="btnsalvar" value="Salvar" class="btn btn-primary" placeholder="Salvar" />
                </div>
            </div>
        </div>
    </div>
</form>  