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
                        <div class="card text-white bg-info o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-comments"></i>
                                </div>
                                <div class="mr-5">Descanse!<br> Seu corpo precisa de tempo para se recuperar, só assim o músculo irá se desenvolver e hipertrofiar.</div>
                            </div>
                           
                               

                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-list"></i>
                                </div>
                                <div class="mr-5">Sem dor, sem ganho. Nada se consegue sem trabalho.</div>
                            </div>
                           
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-shopping-cart"></i>
                                </div>
                                <div class="mr-5"> Atenção!
                                Sua mensalidade estar próxima da data de vencimento.</div>
                            </div>
                         
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-life-ring"></i>
                                </div>
                                <div class="mr-5">Mensalidade em atraso.</div>
                            </div>
                           
                        </div>
                    </div>
                </div>

<div class="card mb-3">


<table class="table table-hover">
        <thead>
          <tr>
            <th>Item</th>
            <th>Serie</th>
            <th>Repetição</th>
            <th>Carga</th>
            <th>Feito</th>
           </tr>
        </thead>

    <tbody>
        <tr data-toggle="collapse" data-target="#accordion" class="clickable">

        <td>Tríceps Polia</td>
        <td>
            <div class="btn-group">
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
      <td>
        <div class="btn-group">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                30
    </button>
    <div class="dropdown-menu">
        ...
    </div>
</div>
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
        <div id="accordion" class="collapse">
            <img src="gif/triceps/tricepsnatesta.gif"> 
        </div>
    </td>
</tr>

        <tr data-toggle="collapse" data-target="#accordion1" class="clickable">

        <td>Tríceps Francês</td>
        <td>
            <div class="btn-group">
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
      <td>
        <div class="btn-group">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                30
    </button>
    <div class="dropdown-menu">
        ...
    </div>
</div>
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
        <div id="accordion1" class="collapse">
            <img src="gif/triceps/tricepsnatesta.gif"> 
        </div>
    </td>
</tr>

        <tr data-toggle="collapse" data-target="#accordion2" class="clickable">

        <td>Tríceps Mergulho</td>
        <td>
            <div class="btn-group">
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
      <td>
        <div class="btn-group">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                30
    </button>
    <div class="dropdown-menu">
        ...
    </div>
</div>
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
        <div id="accordion2" class="collapse">
            <img src="gif/triceps/tricepsnatesta.gif"> 
        </div>
    </td>
</tr>


        <tr data-toggle="collapse" data-target="#accordion3" class="clickable">

        <td>Tríceps Coice</td>
        <td>
            <div class="btn-group">
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
      <td>
        <div class="btn-group">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                30
    </button>
    <div class="dropdown-menu">
        ...
    </div>
</div>
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
        <div id="accordion3" class="collapse">
            <img src="gif/triceps/tricepsnatesta.gif"> 
        </div>
    </td>
</tr>

        <tr data-toggle="collapse" data-target="#accordion4" class="clickable">

        <td>Tríceps Supino</td>
        <td>
            <div class="btn-group">
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
      <td>
        <div class="btn-group">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                30
    </button>
    <div class="dropdown-menu">
        ...
    </div>
</div>
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
        <div id="accordion4" class="collapse">
            <img src="gif/triceps/tricepsnatesta.gif"> 
        </div>
    </td>
</tr>

        <tr data-toggle="collapse" data-target="#accordion5" class="clickable">

        <td>Tríceps Testa</td>
        <td>
            <div class="btn-group">
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
      <td>
        <div class="btn-group">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                30
    </button>
    <div class="dropdown-menu">
        ...
    </div>
</div>
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
        <div id="accordion5" class="collapse">
            <img src="gif/triceps/tricepsnatesta.gif"> 
        </div>
    </td>
</tr>

        <tr data-toggle="collapse" data-target="#accordion6" class="clickable">

        <td>Tríceps Cross Over</td>
        <td>
            <div class="btn-group">
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
      <td>
        <div class="btn-group">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                30
    </button>
    <div class="dropdown-menu">
        ...
    </div>
</div>
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
        <div id="accordion6" class="collapse">
            <img src="gif/triceps/tricepsnatesta.gif"> 
        </div>
    </td>
</tr>

        <tr data-toggle="collapse" data-target="#accordion7" class="clickable">

        <td>Tríceps Corda</td>
        <td>
            <div class="btn-group">
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
      <td>
        <div class="btn-group">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                30
    </button>
    <div class="dropdown-menu">
        ...
    </div>
</div>
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
        <div id="accordion7" class="collapse">
            <img src="gif/triceps/tricepsnatesta.gif"> 
        </div>
    </td>
</tr>
</tbody>
</table>



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
