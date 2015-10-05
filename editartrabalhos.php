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