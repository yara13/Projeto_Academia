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
          <li class="breadcrumb-item active">Página de Relatório</li>
        </ol>

        <!-- Page Content -->
        <h1>Relátório</h1>
        <hr>

          <li class="breadcrumb-item active">Tabela</li>
        </ol>
       <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
          Pagamentos</div>
          
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              
                <tr>
                <th>Controle</th>
                <th>Janeiro</th>
                <th>Fevereiro</th>
                <th>Março</th>
                <th>Abril</th>
                <th>Maio</th>
                <th>Junho</th>
                <th>Julho</th>
                <th>Agosto</th>
                <th>Setembro</th>
                <th>Outubro</th>
                <th>Novembro</th>
                <th>Dezembro</th> 
                </tr>
<td>Alfreds Futterkiste</td>
 <td>Pago</td>
 <td>Pago</td>
  <td>Pago</td>
   <td>Pago</td>
    <td>Pago</td>
    <td>Pago</td>
    <td>Pago</td>
     <td>Pago</td>
      <td>Pago</td>
       <td>Pago</td>
<td>--</td>

</tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Pago</td>
     <td>Pago</td>
      <td> Não Pago</td>
       <td>Pago</td>
        <td>Pago</td>
        <td>Pago</td>
    <td>Pago</td>
     <td>Pago</td>
      <td>Pago</td>
       <td>Pago</td>
<td>--</td>

  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Pago</td>
    <td>Pago</td>
     <td>Pago</td>
      <td>Pago</td>
 <td>Pago</td>
 <td>Pago</td>
    <td>Pago</td>
     <td>Pago</td>
      <td>Pago</td>
       <td>Pago</td>
<td>--</td>

  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Pago</td>
     <td>Pago</td>
      <td>Pago</td>
       <td>Pago</td>
        <td>Pago</td>
<td>Pago</td>
    <td>Pago</td>
     <td>Pago</td>
      <td>Pago</td>
       <td>Pago</td>
<td>--</td>
      </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Não Pago</td>
    <td>Pago</td>
     <td>Pago</td>
      <td>Pago</td>
       <td>Pago</td>
<td>Pago</td>
    <td>Pago</td>
     <td>Não Pago</td>
      <td>Não Pago</td>
       <td>Não Pago</td>
<td>--</td>
   <tr>

  <td>Yara Nascimento</td>
    <td>Sem Contrato</td>
    <td>Sem Contrato</td>
     <td>Não Pago</td>
      <td>Pago</td>
       <td>Pago</td>
<td>Pago</td>
    <td>Pago</td>
     <td>Pago</td>
      <td>Pago</td>
       <td>Pago</td>
<td>--</td>

  </tr>
</table>


  </tr>
  <tr>
   

              </table>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class=""></i>
        <p></p>

      </div>
      <!-- /.container-fluid -->
  <!-- Incluir esse código em todas as paginas apos o fim do conteúdo -->        
  <?php include 'template/rodape.php'; ?>
  <?php include 'template/includes.php'; ?>

  </html>

