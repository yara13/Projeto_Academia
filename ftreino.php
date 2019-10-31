<!DOCTYPE html>
<html lang="en">

<?php include 'template/head.php'; ?>

<body id="page-top">

  <?php include 'template/cabecalho.php'; ?>
  
    <div id="wrapper">
    
      <?php include 'template/menu-lateral.php'; ?>
      
        <div id="content-wrapper">
            <div class="container-fluid">
      <!-- Incluir o código acima no incio de todas as páginas-->
       
      <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Ficha de Treino</li>
        </ol>

        <!-- Page Content -->
        <h1>Ficha de Treino</h1>
        <hr>
        	<!-- ************************** INICIO DO FORMULARIO ***************************** -->
	<form method="POST" action="index.php">
		<div class="form-group">
			<label for="name">Aluno:</label> 
			<input type="text" class="form-control" name="name" > </br>
			<h2> Ergometria</h2>
			<br> 
			<h7> 

       <label for="name">Esteira:</label> 
       <input type="number" class="form-control" name="name" > </br>

       <label for="name">Bicicleta:</label> 
       <input type="number" class="form-control" name="name"> </br>

       <label for="name">Eliptico:</label> 
       <input type="number" class="form-control" name="name"> </br>
     </h7>
     <style>
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even) {
        background-color: #dddddd;
      }
    </style>

    <h2>Peitoral</h2>

    <table>
      <tr>
        <th>Item</th>
        <th>Serie</th>
        <th>Repetição</th>
        <th>Carga</th>
        <tr>
          <td>CROSS OVER</td>
          <td><div class="btn-group">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              2
            </button>
            <div class="dropdown-menu">
              ...
            </div>
          </div>
        </td>
        <td>
          <select name="serie">
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="40">40</option>
          </select>
        </td>
        <td><div class="btn-group">
          <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            30
          </button>
          <div class="dropdown-menu">
            ...
          </div>
        </div>
      </td>
      
    </tr>

    <tr>
      <td>PEC DECK</td>
      <td><div class="btn-group">
        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          2
        </button>
        <div class="dropdown-menu">
          ...
        </div>
      </div>
    </td>
    <td>
      <select name="serie">
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="40">40</option>
      </select>
    </td>
    <td><div class="btn-group">
      <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        30
      </button>
      <div class="dropdown-menu">
        ...
      </div>
    </div>
  </td>

</tr>

<tr>
  <td>CRUCIFIXO</td>
  <td><div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      2
    </button>
    <div class="dropdown-menu">
      ...
    </div>
  </div>
</td>
<td>
  <select name="serie">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
  </select>
</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>

</tr>
<tr>
  <td>SUPINO RETO</td>
  <td><div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      2
    </button>
    <div class="dropdown-menu">
      ...
    </div>
  </div>
</td>
<td>
  <select name="serie">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
  </select>
</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>

</tr>

<tr>
  <td>SUPINO INCLINADO</td>
  <td><div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      2
    </button>
    <div class="dropdown-menu">
      ...
    </div>
  </div>
</td>
<td>
  <select name="serie">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
  </select>
</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>

</tr>
<tr>
  <td>SUPINO DECLINADO</td>
  <td><div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      2
    </button>
    <div class="dropdown-menu">
      ...
    </div>
  </div>
</td>
<td>
  <select name="serie">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
  </select>
</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>

</tr>
<tr>
  <td>FLEXÃO BRAÇO</td>
  <td><div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      2
    </button>
    <div class="dropdown-menu">
      ...
    </div>
  </div>
</td>
<td>
  <select name="serie">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
  </select>
</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>

</tr>
<tr>
  <td>SUP. RETO DUMBELL</td>
  <td><div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      2
    </button>
    <div class="dropdown-menu">
      ...
    </div>
  </div>
</td>
<td>
  <select name="serie">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
  </select>
</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>

</tr>

<tr>
  <td>SUP. INCLINADO DUMBELL</td>
  <td><div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      2
    </button>
    <div class="dropdown-menu">
      ...
    </div>
  </div>
</td>
<td>
  <select name="serie">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
  </select>
</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>

</tr>
</table>

<br>
<h2>Costas</h2>

<table>
  <tr>
    <th>Item</th>
    <th>Serie</th>
    <th>Repetição</th>
    <th>Carga</th>
    <tr>
      <td>Puxador de Costas</td>
      <td><div class="btn-group">
        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          2
        </button>
        <div class="dropdown-menu">
          ...
        </div>
      </div>
    </td>
    <td>
      <select name="serie">
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="40">40</option>
      </select>
    </td>
    <td><div class="btn-group">
      <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        30
      </button>
      <div class="dropdown-menu">
        ...
      </div>
    </div>
  </td>

</tr>

<tr>
  <td>REMADA BAIXA</td>
  <td><div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      2
    </button>
    <div class="dropdown-menu">
      ...
    </div>
  </div>
</td>
<td>
  <select name="serie">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
  </select>
</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>

</tr>

<tr>
  <td>REMADA UNILATERAL</td>
  <td><div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      2
    </button>
    <div class="dropdown-menu">
      ...
    </div>
  </div>
</td>
<td>
  <select name="serie">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
  </select>
</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>

</tr>
<tr>
  <td>REMADA COM BARRA</td>
  <td><div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      2
    </button>
    <div class="dropdown-menu">
      ...
    </div>
  </div>
</td>
<td>
  <select name="serie">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
  </select>
</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>

</tr>
<tr>
  <td>REMADA MACHINE</td>
  <td><div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      2
    </button>
    <div class="dropdown-menu">
      ...
    </div>
  </div>
</td>
<td>
  <select name="serie">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
  </select>
</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>

</tr>

<tr>
  <td>REMADA ARTICULADA</td>
  <td><div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      2
    </button>
    <div class="dropdown-menu">
      ...
    </div>
  </div>
</td>
<td>
  <select name="serie">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
  </select>
</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>

</tr>
<tr>
  <td>PULL OVER</td>
  <td><div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      2
    </button>
    <div class="dropdown-menu">
      ...
    </div>
  </div>
</td>
<td>
  <select name="serie">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
  </select>
</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>

</tr>

<tr>
  <td>ESTENSÃO DE OMBRO</td>
  <td><div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      2
    </button>
    <div class="dropdown-menu">
      ...
    </div>
  </div>
</td>
<td>
  <select name="serie">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
  </select>
</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>

</tr>
</table>			
</tr>
</table>

<br>
<h2>OMBRO/TRAPÉSIO</h2>

<table>
  <tr>
    <th>Item</th>
    <th>Serie</th>
    <th>Repetição</th>
    <th>Carga</th>
    <tr>
      <td>ELEVAÇÃO LATERAL</td>
      <td><div class="btn-group">
        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          2
        </button>
        <div class="dropdown-menu">
          ...
        </div>
      </div>
    </td>
    <td>
      <select name="serie">
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="40">40</option>
      </select>
    </td>
    <td><div class="btn-group">
      <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        30
      </button>
      <div class="dropdown-menu">
        ...
      </div>
    </div>
  </td>

</tr>

<tr>
  <td>ELEVAÇÃO FRONTAL</td>
  <td><div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      2
    </button>
    <div class="dropdown-menu">
      ...
    </div>
  </div>
</td>
<td>
  <select name="serie">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
  </select>
</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>

</tr>

<tr>
  <td>DESEN. MÁQUINA</td>
  <td><div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      2
    </button>
    <div class="dropdown-menu">
      ...
    </div>
  </div>
</td>
<td>
  <select name="serie">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
  </select>
</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>

</tr>
<tr>
  <td>ENCOLHIMENTO OMBRO</td>
  <td><div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      2
    </button>
    <div class="dropdown-menu">
      ...
    </div>
  </div>
</td>
<td>
  <select name="serie">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
  </select>
</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>

</tr>
<td>REMADA ALTA</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
<td>
  <select name="serie">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
  </select>
</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>

</tr>

<td>DESENV.BARRA</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
<td>
  <select name="serie">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
  </select>
</td>
<td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>

</tr>
<tr>
  <td>DESEN. ALTERNADO</td>
 <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>

<tr>
  <td>DESEN. MOINHO</td>
  <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>

<tr>
  <td>DESEN.ALTERNADO</td>
 <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>

<tr>
  <td>CRUCIFIXO INVERSO</td>
  <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>

  <tr>
    <td>ELEVAÇÃO LAT.BANCO</td>
   <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>





</table>
</table>

<br>
<h2>Biceps</h2>

<table>
  <tr>
    <th>Item</th>
    <th>Serie</th>
    <th>Repetição</th>
    <th>Carga</th>
    <tr>
      <td>Puxador de Costas</td>
      <td><div class="btn-group">
        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          2
        </button>
        <div class="dropdown-menu">
          ...
        </div>
      </div>
    </td>
    <td>
      <select name="serie">
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="40">40</option>
      </select>
    </td>
    <td><div class="btn-group">
      <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        30
      </button>
      <div class="dropdown-menu">
        ...
      </div>
    </div>
  </td>

</tr>

<tr>
  <td>ROSCA DIREITA</td>
  <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>

<tr>
  <td>ROSCA ALTERNADA</td>
  <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>
  <td>ROSCA SCOTT</td>
 <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>
<tr>
  <td>BANCO SCOTT</td>
  <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>

<tr>
  <td>ROSCA 21</td>
 <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>
<tr>
  <td>ROSCA CONCENTRADA</td>
  <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    
  </div>
</div>
<img src="img/rosca-concentrada.gif"> 
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>

<tr>
  <td>BÍCEPS CROSS OVER</td>
  <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>


</tr>
</table>      
</tr>
</table>

<br>
<h2>ROSCA NA POLIA</h2>

<table>
  <tr>
    <th>Item</th>
    <th>Serie</th>
    <th>Repetição</th>
    <th>Carga</th>
    <tr>
      <td>ELEVAÇÃO LATERAL</td>
      <td><div class="btn-group">
        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          2
        </button>
        <div class="dropdown-menu">
          ...
        </div>
      </div>
    </td>
    <td>
      <select name="serie">
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="40">40</option>
      </select>
    </td>
    <td><div class="btn-group">
      <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        30
      </button>
      <div class="dropdown-menu">
        ...
      </div>
    </div>
  </td>

</tr>

<tr>
  <td>ELEVAÇÃO FRONTAL</td>
 <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>

<tr>
  <td>DESEN. MÁQUINA</td>
  <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>
<tr>
  <td>ENCOLHIMENTO OMBRO</td>
  <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>
<tr>
  <td>REMADA ALTA</td>
  <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>

<tr>
  <td>DESENV.BARRA</td>
  <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>
<tr>
  <td>DESEN. ALTERNADO</td>
  <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>
<tr>
  <td>DESEN. MOINHO</td>
  <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>

<tr>
  <td>DESEN.ALTERNADO</td>
  <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>

<tr>
  <td>CRUCIFIXO INVERSO</td>
 <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>
  <tr>
    <td>ELEVAÇÃO LAT.BANCO</td>
    <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
    <td>
<select name="serie">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
</td>
      <td><div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
</td>
      
  </tr>

</tr>



</table> 
<br>           
<button type="submit" class="btn btn-primary">Registrar</button>
</div>
</form>

<!-- ************************** FIM DO FORMULARIO ***************************** -->

      </div>
      <!-- /.container-fluid -->
  <!-- Incluir esse código em todas as paginas apos o fim do conteúdo -->        
  <?php include 'template/rodape.php'; ?>
  <?php include 'template/includes.php'; ?>
  </html>