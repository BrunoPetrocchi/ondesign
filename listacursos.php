<?php
$VarExibirCurso = $clsCurso->ExibirCursos();
?>
<h2>Lista Curso</h2>
<a href="?pagina=cadcursos"><input type="submit" value="Cadastrar" class="btnmenu" style="float:right" /></a>
<br/><br/>
<table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Publico</th>
            <th>Opções</th>

        </tr>
    </thead>
    <?php
    for ($i = 0; $i < count($VarExibirCurso); $i++) {
        ?>
        <tbody border="solid 1px" bordercolor="#FFFFFF">
            <tr>
                <td><?php echo $VarExibirCurso[$i]['IDCURSO']; ?></td>
                <td><?php echo $VarExibirCurso[$i]['NOME']; ?></td>
                <td><?php echo $VarExibirCurso[$i]['PUBLICOALVO']; ?></td>
                <td><a href="#" onclick="javascript:confirmar(<?= $VarExibirCurso[$i]['IDCURSO']; ?>)" title="Apagar" ><img src="img/apagar.png" /></a>

                    <a href="?pagina=editarcurso&id=<?php echo $VarExibirCurso[$i]['IDCURSO']; ?>"  title="Visualizar"><img src="img/visualizar.png" /></a>


                </td>
            </tr>
        </tbody>
        <?php
    }
    ?>
</table>
<br/>
Total de <strong><?php echo count($VarExibirCurso); ?></strong> Cursos Ativos.
<br/>
<script type="text/javascript">
     function confirmar(codigo_usuario) { // pode ser qualquer nome
          if (confirm("Deseja Realmente Excluir?")) {
               window.location = "?pagina=acaocurso&acao=excluir&id=" + codigo_usuario; // pode ser qualquer nome
               return true;
          } else {
               return false;
          }
     }
</script>