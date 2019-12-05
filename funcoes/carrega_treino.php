
<?php 
include 'conn.php';

$selectGrupo = "SELECT * FROM grupo";
$resul 	= $conn->query($selectGrupo);
if ($resul->num_rows > 0) {
  while($linha1 = $resul->fetch_assoc()) {
    $Id = $linha1['Id'];
    $grupo = $linha1['nomeg'];?>

    <h2><?php echo $grupo; ?></h2>

    <div class='table-responsive'>
      <table>
        <thead>
          <tr>
            <th><input type='checkbox' class='check' id="<?php echo $Id; ?>">Todos</th>
            <th>Treino</th>
            <th>Serie</th>
            <th>Repetição</th>
            <th>Carga</th>
          </tr>
        </thead>

        <tbody id="m<?php echo $Id; ?>">
          <?php
          $select = "SELECT * FROM tipo WHERE fk_grupo_id = $Id";
          $resultado 	= $conn->query($select);
          if ($resultado->num_rows > 0) {
            while($linha = $resultado->fetch_assoc()) {                   
              $nome = $linha['nomet'];
              $grupo = $linha['fk_grupo_id'];
              $id = $linha['id'];
              carregaLinha ($id, $nome, $Id);                      
            }
          }?>
        </tbody> 
      </table> 
    </div> 

    <?php 
  }
}

function carregaLinha ($id, $nome, $Id){?>
  <tr>
    <td>


      <input type='checkbox' class=' check<?php echo $Id; ?>' name="check[]" value='<?php echo $id; ?>'>

      
    </td>
    <td><?php echo $nome; ?></td>
    <td>

      <select class='form-control ' name="serie">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>

    </td>
    <td>
      <select class='form-control ' name="repeticao">
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="40">40</option>
        <option value="50">50</option>
      </select>
    </td>
    <td>
      <select class='form-control ' name="carga">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
        <option value="25">25</option>
        <option value="30">30</option>
        <option value="35">35</option>
        <option value="40">40</option>
        <option value="45">45</option>
        <option value="50">50</option>
        <option value="55">55</option>
        <option value="60">60</option>
        <option value="65">65</option>
        <option value="70">70</option>
        <option value="75">75</option>
        <option value="80">80</option>
        <option value="85">85</option>
        <option value="90">90</option>
        <option value="95">95</option>
        <option value="100">100</option>
        <option value="105">105</option>
        <option value="110">110</option>
        <option value="115">115</option>
        <option value="120">120</option>
        <option value="125">125</option>
        <option value="130">130</option>
        <option value="135">135</option>
        <option value="140">140</option>
        <option value="145">145</option>
        <option value="150">150</option>
      </select>
    </td>
  </tr>

  <?php

}

?>

