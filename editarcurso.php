<?php
$VarExibirCurso = $clsCurso->ConsultarCursoId($_GET['id']);
?>

<form method="post" name="frmusuarios" id="frmusuarios" action="?pagina=acaocurso&acao=editar&id=<?php echo $VarExibirCurso [0]['IDCURSO'];  ?>">
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
                                            <label class="control-label">Nívell</label>
                                            <select id="ddlnivel" name="ddlnivel" class="form-control">
                                                 <option value="1">Lato Sensu</option>
                                                 <option value="2">AperfeiÃ§oamento</option>
                                            </select>
                                        </div>
                                    </div>
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Usuarios</label>
                                            <select id="txtusuarios" name="txtusuarios" class="form-control">
                                                <option value="1">Lato Sensu</option>
                                                <option value="2">AperfeiÃ§oamento</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Público-Alvo</label>
                                    <textarea id="txtPublicoAlvo" rows="3" name="txtPublicoAlvo" class="form-control"><?php echo $VarExibirCurso[0]['PUBLICOALVO']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Objetivos</label>
                                    <textarea id="txtObjetivo" rows="3" name="txtObjetivo" class=" form-control"><?php echo $VarExibirCurso[0]['OBJETIVOS']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Possibilidades Profissionais</label>
                                    <textarea id="txtPossibilidadesProfissionais" rows="3" name="txtPossibilidadesProfissionais" class=" form-control"><?php echo $VarExibirCurso[0]['POSSIBILIDADESPROFISSIONAIS']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Estrutura Oferecida</label>
                                    <textarea id="txtEstruturaOferecida" rows="3" name="txtEstruturaOferecida" class=" form-control"><?php echo $VarExibirCurso[0]['ESTRUTURAOFERECIDA']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Módulos (separados por ponto e vírgula ( ; ))</label>
                                    <textarea id="txtModulos" rows="3" name="txtModulos" class=" form-control"><?php echo $VarExibirCurso[0]['MODULOS']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Duração</label>
                                    <textarea id="txtDuracao" rows="3" name="txtDuracao" class=" form-control"><?php echo $VarExibirCurso[0]['DURACAO']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Início</label>
                                    <textarea id="txtInicio" rows="3" name="txtInicio" class=" form-control"><?php echo $VarExibirCurso[0]['INICIO']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Horário</label>
                                    <textarea id="txtHorario" rows="3" name="txtHorario" class=" form-control"><?php echo $VarExibirCurso[0]['HORARIO']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Turma Mínima</label>
                                    <textarea id="txtTurmaMinima" rows="3" name="txtTurmaMinima" class=" form-control"><?php echo $VarExibirCurso[0]['TURMAMINIMA']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Requisitos</label>
                                    <textarea id="txtRequisitos" rows="3" name="txtRequisitos" class=" form-control"><?php echo $VarExibirCurso[0]['REQUISITOS']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Embasamento Legal</label>
                                    <textarea id="txtEmbasamentoLegal" rows="3" name="txtEmbasamentoLegal" class=" form-control"><?php echo $VarExibirCurso[0]['EMBASAMENTOLEGAL']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Investimento</label>
                                    <textarea id="txtInvestimento" rows="3" name="txtInvestimento" class=" form-control"><?php echo $VarExibirCurso[0]['INVESTIMENTO']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Observação</label>
                                    <textarea id="txtObservacao" rows="3" name="txtObservacao" class=" form-control"><?php echo $VarExibirCurso[0]['OBSERVACAO']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Convênios</label>
                                    <textarea id="txtConvenios" rows="3" name="txtConvenios" class=" form-control"><?php echo $VarExibirCurso[0]['CONVENIOS']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Portaria MEC</label>
                                    <input type="text" id="txtPortariaMEC" name="txtPortariaMEC" class=" form-control" value="<?php echo $VarExibirCurso[0]['MEC']; ?>" />
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