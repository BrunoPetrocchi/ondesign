<?php
$VarExibirVideos = $clsVideos->ConsultarVideos($_GET['id'])
?>
<form method="post" name="frmvideo" id="frmvideo" action="?pagina=acaovideos&acao=editar&id=<?php echo $VarExibirVideos[0]['IDVIDEO'];  ?>">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" placeholde="Artigo">Editar Vídeo</h3>
                </div>

                <div class="panel-body">  
                    <div class="row">
                        <div class="col-lg-12"> 

                            <div class="form-group">
                                <label class="control-label">Título</label>
                                <input type="text" id="txtTitulo" name="txtTitulo" class="form-control" value="<?php echo $VarExibirVideos[0]['NOME'];  ?>"></input>
                            </div> 

                            <div class="form-group">
                                <label class="control-label" >Link</label>
                                <input type="text" id="txtLink" name="txtLink" class="form-control" value="<?php echo $VarExibirVideos[0]['URL'];  ?>"></input>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel-footer">
                    <input type="submit" id="btnSalvar" name="btnSalvar" value="Salvar" class="btn btn-primary"/>
                </div>
            </div>
        </div>
    </div>
</form>