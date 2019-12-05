
<?php 
include 'funcoes/conn.php';

$selectGrupo = "SELECT * FROM grupo";
$resul 	= $conn->query($selectGrupo);
if ($resul->num_rows > 0) {
  while($linha1 = $resul->fetch_assoc()) {
    $Id = $linha1['Id'];
    $grupo = $linha1['nomeg'];?>

    <h2><?php echo $grupo; ?></h2>
  </br>
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
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>

    </td>
    <td>
      <select class='form-control ' name="repeticao">
        <option>10</option>
        <option>20</option>
        <option>30</option>
        <option>40</option>
        <option>50</option>
      </select>
    </td>
    <td>
      <select class='form-control ' name="carga">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>15</option>
        <option>20</option>
        <option>25</option>
        <option>30</option>
        <option>35</option>
        <option>40</option>
        <option>45</option>
        <option>50</option>
        <option>55</option>
        <option>60</option>
        <option>65</option>
        <option>70</option>
        <option>75</option>
        <option>80</option>
        <option>85</option>
        <option>90</option>
        <option>95</option>
        <option>100</option>
        <option>105</option>
        <option>110</option>
        <option>115</option>
        <option>120</option>
        <option>125</option>
        <option>130</option>
        <option>135</option>
        <option>140</option>
        <option>145</option>
        <option>150</option>
      </select>
    </td>
  </tr>

  <?php

}

?>

