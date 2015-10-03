<script type="text/javascript" src="js/scripts.js"></script>
<a href="?pagina=listaeventos"><input type="submit" value="Voltar" class="btnmenu" style="float:right" /></a>
<br/><br/>
<form method="post" name="cadeventos" class="cadeventos" action="?pagina=acaoeventos&acao=cadastrar">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" placeholde="Eventos">Cadastrar Eventos</h3>
                </div>
                <div class="panel-body">  
                    <div class="row">
                        <div class="col-lg-12"> 
                            <div class="form-group">
                                <label class="control-label">Nome</label>
                                <input type="text" id="txtNome" name="txtNome" class="form-control" placeholde="Informe o nome do evento"></input>
                            </div> 

                            <div class="form-group">
                                <label class="control-label" >Data</label>
                                <input type="text" id="datepicker" name="datepicker" class="form-control datas"placeholde="Insira a data"></input>
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