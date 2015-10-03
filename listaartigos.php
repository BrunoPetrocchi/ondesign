<?php
$VarExibirArtigos = $clsArtigos->ExibirArtigos();
?>
<a href="?pagina=artigo">Cadastrar Artigos</a>
<br/><br/>
<table>
    <tr>
        <th>Id</th>
        <th>Título</th>
        <th>Autor</th>
        <th>Data</th>
        <th>Descricao</th>
    </tr>
    <?php
    for ($i = 0; $i < count($VarExibirArtigos); $i++) {
        ?>
        <tr>
            <td><?php echo $VarExibirArtigos[$i]['IDARTIGO']; ?></td>
            <td><?php echo $VarExibirArtigos[$i]['TITULO']; ?></td>
            <td><?php echo $VarExibirArtigos[$i]['AUTOR']; ?></td>
            <td><?php echo $VarExibirArtigos[$i]['DATA']; ?></td>
            <td><?php echo $VarExibirArtigos[$i]['ARTIGO']; ?></td>
            
            <td>  <a href="?pagina=editaartigoss&id=<?php echo $VarExibirArtigos[$i]['IDARTIGO']; ?>"  title="Visualizar">Visualizar</a></td>

        </tr>
        <?php
    }
    ?>
        
</table>