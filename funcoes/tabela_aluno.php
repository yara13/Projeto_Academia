<?php include 'conn.php'; ?>

<div class='table-responsive'>
  <p>Aluno Daniel</p>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Grupo</th>
        <th>Treino</th>
        <th>Serie</th>
        <th>Repetição</th>
        <th>Carga</th>
      </tr>
    </thead>

    <tbody >
      <?php
      $select = "SELECT * FROM treino AS t
      JOIN tipo AS ti ON t.fk_tipo_id = ti.id
      JOIN grupo AS g ON t.fk_grupo_id = g.Id
      WHERE fk_usuario_id = 1";
      $resultado 	= $conn->query($select);
      if ($resultado->num_rows > 0) {
        while($linha = $resultado->fetch_assoc()) {                   
          $nomet = $linha['nomet'];
          $nomeg = $linha['nomeg'];
          $serie = $linha['serie'];
          $repeticao = $linha['repeticao'];
          $carga = $linha['carga'];
          
          carregaLinha ($nomet, $nomeg, $serie, $repeticao, $carga);                      
        }
      }?>
    </tbody> 
  </table> 
</div> 

<?php 

function carregaLinha ($nomet, $nomeg, $serie, $repeticao, $carga){?>
  <tr>
    <td><?php echo $nomeg; ?></td>
    <td><?php echo $nomet; ?></td>
    <td><?php echo $serie; ?></td>
    <td><?php echo $repeticao; ?></td>
    <td><?php echo $carga; ?></td>

  </tr>

  <?php

}

?>