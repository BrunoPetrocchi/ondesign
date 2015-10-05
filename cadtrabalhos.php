<script type="text/javascript" src="js/scripts.js"></script>
<a href="?pagina=listausuarios"><input type="submit" value="Voltar" class="btnmenu" style="float:right" /></a>
<br/><br/>
<form method="post" name="cadusuarios" class="cadusuarios" action="?pagina=acaousuarios&acao=cadastrar">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" placeholde="Eventos">Cadastrar Usuários</h3>
                </div>
                <div class="panel-body">  
                    <div class="row">
                        <div class="col-lg-12"> 
                            <div class="form-group">
                                <label class="control-label">Nome</label>
                                <input type="text" id="nome" name="nome" class="form-control" placeholde="Informe o nome"></input>
                            </div> 

                            <div class="form-group">
                                <label class="control-label">E-mail</label>
                                <input type="text" id="email" name="email" class="form-control" placeholde="Informe o E-mail"></input>
                            </div> 
                            <div class="form-group">
                                <label class="control-label">Senha</label>
                                <input type="text" id="senha" name="senha" class="form-control" placeholde="Informe a Senha"></input>
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