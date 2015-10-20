<form method="post" name="frmusuarios" id="frmusuarios" action="?pagina=acaocurso&acao=cadastrar">
    <div class="">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Curso</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label">Nome</label>
                                    <input type="text" id="txtNome" name="txtNome" class="form-control" />
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Nivel</label>
                                            <select id="txtnivel" name="txtnivel" class="form-control">
                                                 <option value="1">Lato Sensu</option>
                                                <option value="2">Aperfeiçoamento</option>
                                            </select>
                                        </div>
                                    </div>
                                     
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Usuários</label>
                                            <select id="txtusuarios" name="txtusuarios" class="form-control">
                                                <option value="1">Lato Sensu</option>
                                                <option value="2">Aperfeiçoamento</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Público-Alvo</label>
                                    <textarea id="txtPublicoAlvo" rows="3" name="txtPublicoAlvo" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Objetivos</label>
                                    <textarea id="txtObjetivo" rows="3" name="txtObjetivo" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Possibilidades Profissionais</label>
                                    <textarea id="txtPossibilidadesProfissionais" rows="3" name="txtPossibilidadesProfissionais" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Estrutura Oferecida</label>
                                    <textarea id="txtEstruturaOferecida" rows="3" name="txtEstruturaOferecida" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Modulos (separados por ponto e virgula ( ; ))</label>
                                    <textarea id="txtModulos" rows="3" name="txtModulos" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Duração</label>
                                    <textarea id="txtDuracao" rows="3" name="txtDuracao" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Início</label>
                                    <textarea id="txtInicio" rows="3" name="txtInicio" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Horário</label>
                                    <textarea id="txtHorario" rows="3" name="txtHorario" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Turma Mínima</label>
                                    <textarea id="txtTurmaMinima" rows="3" name="txtTurmaMinima" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Requisitos</label>
                                    <textarea id="txtRequisitos" rows="3" name="txtRequisitos" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Embasamento Legal</label>
                                    <textarea id="txtEmbasamentoLegal" rows="3" name="txtEmbasamentoLegal" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Investimento</label>
                                    <textarea id="txtInvestimento" rows="3" name="txtInvestimento" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Convênios</label>
                                    <textarea id="txtConvenios" rows="3" name="txtConvenios" class=" form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Portaria MEC</label>
                                    <input type="text" id="txtPortariaMEC" rows="3" name="txtPortariaMEC" class=" form-control" />
                                </div>
                                 <div class="form-group">
                                    <label class="control-label">Observação</label>
                                    <textarea id="txtObservacao" rows="3" name="txtObservacao" class=" form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer">
                        <input type="submit" id="btnSalvar" value="Salvar" class="btn btn-primary" />
                        <input type="button" id="btnCancelar" value="Cancelar" class="btn btn-default" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>