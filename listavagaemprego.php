
<?php
$VarListaVagaEmprego = $clsVagaEmprego->ListaVagaEmprego();
?>
<h2>Vaga de Emprego</h2>
<a href="?pagina=cadvagaemprego"><input type="submit" value="Cadastrar" class="btnmenu" style="float:right" /></a>
<br/><br/>
<form method="post" name="listavagaemprego" id="listavagaemprego">
    <!-- <input type="text" class="form-control" placeholder="Consultar Fisioterapeuta" id="pesquisar" name="pesquisar">
     <br/>-->
    <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
        <thead>
            <tr>
                <th>Código</th>
                <th>Título</th>
                <th>Empresa</th>
                <th>Cargo</th>
            </tr>
        </thead>
        <?php
        for ($i = 0; $i < count($VarListaVagaEmprego); $i++) {
            ?>
            <tbody border="solid 1px" bordercolor="#FFFFFF">
                <tr>
                    <td><?php echo $VarListaVagaEmprego [$i]['IDVAGAEMPREGO']; ?></td>
                    <td><?php echo $VarListaVagaEmprego [$i]['TITULO']; ?></td>
                    <td><?php echo $VarListaVagaEmprego [$i]['EMPRESA']; ?></td>
                    <td><?php echo $VarListaVagaEmprego [$i]['CARGO']; ?></td>
                    <td><a href="#" onclick="javascript:confirmar(<?= $VarListaVagaEmprego[$i]['IDVAGAEMPREGO']; ?>)" title="Apagar" ><img src="img/apagar.png" /></a>

                        <a href="?pagina=editarvagaemprego&id=<?php echo $VarListaVagaEmprego[$i]['IDVAGAEMPREGO']; ?>"  title="Visualizar"><img src="img/visualizar.png" /></a>


                    </td>
                </tr>
            </tbody>

            <?php
        }
        ?>

    </table>
    <br/>
    Total de <strong><?php echo count($VarListaVagaEmprego); ?></strong> Vagas de Emprego Ativos.
    <br/>
</form>
<script type="text/javascript">
    function confirmar(codigo_vagaemprego) { // pode ser qualquer nome
        if (confirm("Deseja Realmente Excluir?")) {
            window.location = "?pagina=acaovagaempregos&acao=excluir&id=" + codigo_vagaemprego; // pode ser qualquer nome
            return true;
        } else {
            return false;
        }
    }
</script>

