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