<?php
$VarExibirCurso = $clsCurso->ConsultarCursoId($_GET['id'])
?>

<form method="post" name="frmusuarios" id="frmusuarios" action="?pagina=acaocurso&acao=editar">
    <div class="">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Editar Curso</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label">Nome</label>
                                    <input type="text" id="txtNome" name="txtNome" value="<?php echo $VarExibirCurso[0]['NOME'] ?>" class="form-control" />
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Nível</label>
                                            <select id="ddlnivel" name="ddlnivel" class="form-control">
                                                <option>Lato Sensu</option>
                                                <option>Aperfeiçoamento</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Ativo</label>
                                            <select id="ddlAtivo" name="ddlAtivo" class="form-control">
                                                <option value="1">Sim</option>
                                                <option value="0">Não</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Público-Alvo</label>
                                    <textarea id="txtPublicoAlvo" rows="6" name="txtPublicoAlvo" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Objetivos</label>
                                    <textarea id="txtObjetivo" rows="6" name="txtObjetivo" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Possibilidades Profissionais</label>
                                    <textarea id="txtPossibilidadesProfissionais" rows="6" name="txtPossibilidadesProfissionais" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Estrutura Oferecida</label>
                                    <textarea id="txtEstruturaOferecida" rows="6" name="txtEstruturaOferecida" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Módulos (separados por ponto e vírgula ( ; ))</label>
                                    <textarea id="txtModulos" rows="6" name="txtModulos" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Duração</label>
                                    <textarea id="txtDuracao" rows="6" name="txtDuracao" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Início</label>
                                    <textarea id="txtInicio" rows="6" name="txtInicio" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Horário</label>
                                    <textarea id="txtHorario" rows="6" name="txtHorario" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Turma Mínima</label>
                                    <textarea id="txtTurmaMinima" rows="6" name="txtTurmaMinima" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Requisitos</label>
                                    <textarea id="txtRequisitos" rows="6" name="txtRequisitos" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Embasamento Legal</label>
                                    <textarea id="txtEmbasamentoLegal" rows="6" name="txtEmbasamentoLegal" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Investimento</label>
                                    <textarea id="txtInvestimento" rows="6" name="txtInvestimento" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Observações</label>
                                    <textarea id="txtObservacao" rows="6" name="txtObservacao" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Convênios</label>
                                    <textarea id="txtConvenios" rows="6" name="txtConvenios" class=" form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Portaria MEC</label>
                                    <input type="text" id="txtPortariaMEC" name="txtPortariaMEC" class=" form-control" />
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