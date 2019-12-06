<?php include 'conn.php'; ?>

<div class='table-responsive'>
  <p>Aluno Daniel</p>
  <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">treino A</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">treino B</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">treino C</a>
  </li>
  
</ul>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        
        <th>Treino</th>
        <th>Serie</th>
        <th>Repetição</th>
        <th>Carga</th>
        <th>Feito</th>
       
      </tr>
    </thead>

    <tbody >
      <?php
      $select = "SELECT tp.nomet, tp.imagem, t.carga, t.repeticao, t.serie, tp.id as 'idt', u.id,  SUBSTRING(UPPER(g.nomeg), 1, 4) as 'grupo' FROM tipo tp, treino t, usuario u, grupo g
WHERE t.fk_tipo_id = tp.id and t.fk_usuario_id = u.id and t.fk_grupo_id = g.Id and t.fk_usuario_id = 1
";
      $resultado 	= $conn->query($select);
      if ($resultado->num_rows > 0) {
        while($linha = $resultado->fetch_assoc()) {                   
          $nomet = $linha['nomet'];
          $nomeg = $linha['grupo'];
          $serie = $linha['serie'];
          $repeticao = $linha['repeticao'];
          $carga = $linha['carga'];
          $imagem = $linha["imagem"];
          $caminho = "./gif/$nomeg/$imagem.gif.gif";
          $id_tipo = $linha["idt"];
          carregaLinha ($nomet, $nomeg, $serie, $repeticao, $carga, $caminho, $id_tipo);                      
        }
      }?>
    </tbody> 
  </table> 
</div> 

<?php 

function carregaLinha ($nomet, $nomeg, $serie, $repeticao, $carga, $caminho, $id_tipo){?>
  <!--<tr>
    <td><?php echo $nomeg; ?></td>
    <td><?php echo $nomet; ?></td>
    <td><?php echo $serie; ?></td>
    <td><?php echo $repeticao; ?></td>
    <td><?php echo $carga; ?></td>
    <td colspan="3">
        <div id="accordion" class="collapse">
            <?php echo "<img src='$caminho' alt='Smiley face' height='42' width='42'/>"; ?>
        </div>
    </td>
  </tr>-->
         <tr data-toggle="collapse" data-target="#accordion<?php echo $id_tipo; ?>" class="clickable">

      
        <td><?php echo $nomet; ?></td>
        <td>
            <?php echo $serie; ?>
         </td>
       
      <td>
        <?php echo $repeticao; ?>

</td>
<td>
    <?php echo $carga; ?>
</td>
<td>
    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" value="">Pago!
    </label>
</div>
</td>
</tr>
<tr>
    <td colspan="3">
        <div id="accordion<?php echo $id_tipo; ?>" class="collapse">
            <?php echo "<img src='$caminho' alt='Smiley face' height='42' width='42'/>"; ?>
        </div>
    </td>
</tr>


  <?php

}

?>