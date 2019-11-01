<!DOCTYPE html>
<html lang="en">

<?php include 'template/head_aluno.php'; ?>

<body id="page-top">

  <?php include 'template/cabecalho_aluno.php'; ?>
  
    <div id="wrapper">
    
      <?php include 'template/menu-lateral_aluno.php'; ?>
      
        <div id="content-wrapper">
            <div class="container-fluid">
 <!-- Incluir o código acima no incio de todas as páginas-->

                <!-- Menu para editar conforme a página-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Área do Aluno</a>
                    </li>
                    <li class="breadcrumb-item active">Visão Geral</li>
                </ol>

                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-comments"></i>
                                </div>
                                <div class="mr-5">Calma…
Amanhã já é dia de treino!!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">#</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-list"></i>
                                </div>
                                <div class="mr-5">11 Novas Tarefas!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">Ver Detalhes</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-shopping-cart"></i>
                                </div>
                                <div class="mr-5">123 Novos Pedidos!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">Ver Detalhes</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-life-ring"></i>
                                </div>
                                <div class="mr-5">13 New Tickets!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">Ver Detalhes</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
         
                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Controle de Pagamento
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <?php include 'template/carrega-table.php' ?>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>

                <!-- Area Chart Example-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-chart-area"></i>
                    Exemplo de Area de Gráfico</div>
                    <div class="card-body">
                        <canvas id="myAreaChart" width="100%" height="30"></canvas>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>

  <!-- /.content-wrapper -->
  <!-- Incluir esse código em todas as paginas apos o fim do conteúdo -->        
  <?php include 'template/rodape.php'; ?>
  <?php include 'template/includes.php'; ?>
  </html>
