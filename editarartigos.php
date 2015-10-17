<?php
$VarExibirArtigos = $clsArtigos->ConsultarArtigoId($_GET['id'])
?>

<form method="post" name="frmartigo" id="frmartigo" action="?pagina=acaoartigo&acao=cadastrar">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Artigo</h3>
                </div>

                <div class="panel-body">  
                    <div class="row">
                        <div class="col-lg-12"> 

                            <div class="form-group">
                                <label class="control-label">Título</label>
                                <input type="text" id="txtTitulo" name="txtTitulo" class="form-control" placeholder="Informe o Título" value="<?php echo $VarExibirArtigos [0] ['TITULO'] ?>"/>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Autor</label>
                                        <input type="text" id="txtAutor" name="txtAutor" class="form-control" placeholder="Informe o Autor" value="<?php echo $VarExibirArtigos [0] ['AUTOR'] ?>" />
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Data</label>
                                        <input type="text" id="txtData" name="txtData" class="form-control" placeholder="Informe a data" value="<?php echo $VarExibirArtigos [0] ['DATA'] ?>"/>
                                    </div>
                                </div>
                            </div>  

                            <div class="form-group">
                                <label class="control-label">Descrição</label>
                                <textarea type="text" id="txtDescricao" name="txtDescricao" rows="30" class="form-control" placeholder="Descrição" value="<?php echo $VarExibirArtigos [0] ['ARTIGO'] ?>"></textarea>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="panel-footer">
                    <input type="submit" id="btnSalvar" value="Salvar" class="btn btn-primary" placeholder="Salvar"/>
                </div>
            </div>
        </div>
    </div>
</form>  



