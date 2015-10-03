<?php
$VarExibirCurso = $clsCurso->ExibirCursos();
?>
<a href="?pagina=formcurso">Cadastrar Curso</a>
<br/><br/>
<table>
     <tr>
          <th>Id</th>
          <th>Nome</th>
          <th>Nível</th>
          <th>Público-alvo</th>
          <th>Opções</th>
     </tr>
     <?php
     for ($i = 0; $i < count($VarExibirCurso); $i++) {
          ?>
     <tr>
          <td><?php echo $VarExibirCurso[$i]['IDCURSO']; ?></td>
          <td><?php echo $VarExibirCurso[$i]['NOME']; ?></td>
          <td><?php echo $VarExibirCurso[$i]['NIVEL']; ?></td>
          <td><?php echo $VarExibirCurso[$i]['PUBLICOALVO']; ?></td>
          <td><a href="?pagina=editarcurso&id=<?php echo $VarExibirCurso[$i]['IDUSUARIO']; ?>"  title="Visualizar">Visualizar</a></td>

     </tr>
          <?php
     }
     ?>        
</table>