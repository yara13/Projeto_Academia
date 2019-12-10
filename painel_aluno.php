       <!-- Menu para editar conforme a página-->
       <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Painel do Aluno</a>
        </li>
        <li class="breadcrumb-item active">Visão Geral</li>
      </ol>

      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-info o-hidden h-100 collapse">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">Descanse!<br> Seu corpo precisa de tempo para se recuperar, só assim o músculo irá se desenvolver e hipertrofiar.</div>
            </div>



          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100 collapse">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-list"></i>
              </div>
              <div class="mr-5">Sem dor, sem ganho. Nada se consegue sem trabalho.</div>
            </div>


          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning success o-hidden h-100 collapse">
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
          <div class="card text-white bg-danger o-hidden h-100 collapse">
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
        <?php include 'funcoes/tabela_aluno.php'; ?>

      </div>
      <!-- Area Chart Example-->
    <!-- /.content-wrapper -->
  