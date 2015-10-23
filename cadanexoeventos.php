<script type="text/javascript" src="js/scripts.js"></script>
<a href="?pagina=listaeventos"><input type="submit" value="Voltar" class="btnmenu" style="float:right" /></a>
<br/><br/>
<form method="post" name="cadeventos" class="cadeventos" action="?pagina=acaoeventos&acao=cadastrar_anexo" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" placeholde="Eventos">Anexar Eventos</h3>
                </div>
                <div class="panel-body">  
                    <div class="row">
                        <div class="col-lg-12"> 
                            <div class="form-group">
                                <label class="control-label">Anexo:</label>
                                <input type="file" id="anexo" name="anexo" class="form-control"></input>
                                <input type="hidden" id="codigo" name="codigo" value="<?php echo $_GET['codigo']; ?>"></input>
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