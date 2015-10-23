<?php
     $VarConsultaEmprego = $clsVagaEmprego ->ConsultaVagaEmpregoId($_GET['id'])
?>
<script type="text/javascript" src="js/scripts.js"></script>
<a href="?pagina=listavagaemprego"><input type="submit" value="Voltar" class="btnmenu" style="float:right" /></a>
<br/><br/>
<form method="post" name="cadvagaemprego" class="cadvagaemprego" action="?pagina=acaovagaemprego&acao=alterarvagaemprego&id=<?php echo $VarConsultaEmprego [0]['IDVAGAEMPREGO'];  ?>">
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
                                        <input type="text" id="txtTitulo" name="txtTitulo" class="form-control" value="<?php echo $VarConsultaEmprego [0]['TITULO']; ?>"/>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Empresa</label>
                                        <input type="text" id="txtEmpresa" name="txtEmpresa" class="form-control" value="<?php echo $VarConsultaEmprego [0]['NOMEEMPRESA']; ?> "/>
                                    </div>
                                </div>
                            </div>  
                            <div class="form-group">
                                <label class="control-label">Cargo</label>
                                <input type="text" id="txtCargo" name="txtCargo"  class="form-control" value="<?php echo $VarConsultaEmprego [0]['CARGO']; ?> "/>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Descrição</label>
                                <textarea type="text" id="txtDescricao" name="txtDescricao" rows="6" class="form-control"><?php echo $VarConsultaEmprego [0]['DETALHES']; ?></textarea>
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