<?php include 'conn.php'; ?>

<div class='table-responsive'>
  <p>Aluno Daniel</p>

  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link" id="A-tab" data-toggle="tab" href="#A" role="tab" aria-controls="home" aria-selected="true">Treino A</a>
    </li>
    <li class="nav-item">
       
      <a class="nav-link disabled " id="B-tab" data-toggle="tab" href="#B" role="tab" aria-controls="profile" aria-selected="false">Treino B</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" id="C-tab" data-toggle="tab" href="#C" role="tab" aria-controls="contact" aria-selected="false">Treino C</a>
    </li>
  </ul>  
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="A" role="tabpanel" aria-labelledby="home-tab">
        <?php preencheTabela(1, 1, $conn); ?> 
    </div>
    <div class="tab-pane fade" id="B" role="tabpanel" aria-labelledby="profile-tab">
        <?php preencheTabela(1, 2, $conn); ?> 
    </div>
    <div class="tab-pane fade" id="C" role="tabpanel" aria-labelledby="contact-tab">
        <?php preencheTabela(1, 3, $conn); ?>  
    </div>
  </div>
</div> 


<input type="checkbox" onClick="toggle(this)" /> Marcar Todos<br/>
<button type="button" class="btn btn-success">Gravar Treino</button>

<?php 

function carregaLinha ($nomet, $nomeg, $serie, $repeticao, $carga, $caminho, $id_tipo){
    $a = "<tr data-toggle='collapse' data-target='#accordion$id_tipo' class='clickable'>
      <td><a href='#' data-toggle='modal' data-target='#modal$id_tipo'>$nomet</a></td>
      <td>$serie</td>
      <td>$repeticao</td>
      <td>$carga</td>
      <td>
        <div class='form-check'>
          <label class='form-check-label'>
            <input type='checkbox' class='form-check-input' value='' name='pago'>Ok!
          </label>
        </div>
      </td>
    </tr>
   ";
    return $a;
}

function preencheTabela($idAluno, $grupo, $conn) {  
      echo "
      <table class='table'>
        <thead class='thead-dark'>
          <tr>      
            <th>Treino</th>
            <th>Ser.</th>
            <th>Rep.</th>
            <th>Carg</th>
            <th>OK</th>     
          </tr>
        </thead>
        <tbody>";

      $select = "SELECT tp.nomet, tp.imagem, t.carga, t.repeticao, t.serie, tp.id as 'idt', u.id, SUBSTRING(UPPER(g.nomeg), 1, 4) as 'grupo' FROM tipo tp, treino t, usuario u, grupo g WHERE t.fk_tipo_id = tp.id and t.fk_usuario_id = u.id and t.fk_grupo_id = g.Id and t.fk_usuario_id = 1 and g.grupo = $grupo
      ";

    $resultado  = $conn->query($select);
    if ($resultado->num_rows > 0) {
      while($linha = $resultado->fetch_assoc()) {                   
        $nomet = $linha['nomet'];
        $nomeg = $linha['grupo'];
        $serie = $linha['serie'];
        $repeticao = $linha['repeticao'];
        $carga = $linha['carga'];
        $imagem = $linha["imagem"];
        $caminho = "./gif/$nomeg/$imagem.gif";
        $id_tipo = $linha["idt"];
        $l = carregaLinha ($nomet, $nomeg, $serie, $repeticao, $carga, $caminho, $id_tipo);
        echo $l;                   
      }
    }
    echo  "</tbody> </table> ";

 $resultado  = $conn->query($select);
    if ($resultado->num_rows > 0) {
      while($linha = $resultado->fetch_assoc()) {                   
        $nomet = $linha['nomet'];
        $nomeg = $linha['grupo'];
        $serie = $linha['serie'];
        $repeticao = $linha['repeticao'];
        $carga = $linha['carga'];
        $imagem = $linha["imagem"];
        $caminho = "./gif/$nomeg/$imagem.gif";
        $id_tipo = $linha["idt"]; 
echo "
      <div class='modal fade' id='modal$id_tipo' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
      <div class='modal-content'>
        <div class='modal-header' align='center'>
          <h5 class='modal-title' id='exampleModalLabel'>$nomet - Como fazer.</h5>
          <button class='close' type='button' data-dismiss='modal' aria-label='Close'>
            <span aria-hidden='true'>×</span>
          </button>
        </div>
        <div class='modal-body' align='center'><img align='center' src='$caminho' alt='' height='300' width='300'/></div>
        <div class='modal-footer'>
          
        </div>
      </div>
    </div>
  </div>
  ";
      }
    }
     
}

?>


<script>
function toggle(source) {
  checkboxes = document.getElementsByName('pago');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>