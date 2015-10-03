<?php
$VarExibirVideos = $clsVideos->ExibirVideos();
?>
<h2>Vídeos</h2>
<a href="?pagina=cadvideo"><input type="submit" value="Cadastrar" class="btnmenu" style="float:right" /></a>
<br/><br/>
<form method="post" name="listavideo" id="listavideo">
    <!-- <input type="text" class="form-control" placeholder="Consultar Fisioterapeuta" id="pesquisar" name="pesquisar">
     <br/>-->
    <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
        <thead>
            <tr>
                <th>Código</th>
                <th>Url</th>
                <th>Nome</th>
                <th>Opções</th>
            </tr>
        </thead>
        <?php
        for ($i = 0; $i < count($VarExibirVideos); $i++) {
            ?>
            <tbody border="solid 1px" bordercolor="#FFFFFF">
                <tr>
                    <td><?php echo $VarExibirVideos [$i]['IDVIDEO']; ?></td>
                    <td><?php echo $VarExibirVideos [$i]['URL']; ?></td>
                    <td><?php echo $VarExibirVideos [$i]['NOME']; ?></td>
                    <td><a href="#" onclick="javascript:confirmar(<?= $VarExibirVideos[$i]['IDVIDEO']; ?>)" title="Apagar" ><img src="img/apagar.png" /></a>

                        <a href="?pagina=editarvideo&id=<?php echo $VarExibirVideos[$i]['IDVIDEO']; ?>"  title="Visualizar"><img src="img/visualizar.png" /></a>


                    </td>
                </tr>
            </tbody>

            <?php
        }
        ?>

    </table>
    <br/>
    Total de <strong><?php echo count($VarExibirVideos); ?></strong> Videos Ativos.
    <br/>
</form>
<script type="text/javascript">
    function confirmar(codigo_video) { // pode ser qualquer nome
        if (confirm("Deseja Realmente Excluir?")) {
            window.location = "?pagina=acaovideos&acao=excluir&id=" + codigo_video; // pode ser qualquer nome
            return true;
        } else {
            return false;
        }
    }
</script>


