<?php
echo " <!-- Sidebar -->
    <ul class='sidebar navbar-nav'>
      <li class='nav-item active'>
        <a class='nav-link' href='areaaluno.php'>
          <i class='fas fa-fw fa-tachometer-alt'></i>
          <span>Área do Aluno</span>
        </a>
      </li>
      <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='pagesDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
          <i class='fas fa-fw fa-folder'></i>
          <span>Paginas</span>
        </a>
          <!-- ADICIONE AS NOVAS PAGINAS CRIADAS -->
        <div class='dropdown-menu' aria-labelledby='pagesDropdown'>
          <h6 class='dropdown-header'>Telas de Login:</h6>
          <a class='dropdown-item' href='login.php'>Login</a>
         
          <a class='dropdown-item' href='forgot-password.php'>Esqueci Senha</a>
          <div class='dropdown-divider'></div>
          <h6 class='dropdown-header'>Outras páginas:</h6>
          <a class='dropdown-item' href='fmedidas.php'>Ficha de Medidas</a>
          <a class='dropdown-item' href='ftreino.php'>Ficha de Treino</a>
        </div>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='charts.php'>
          <i class='fas fa-fw fa-chart-area'></i>
          <span>Gráficos</span></a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='tables.php'>
          <i class='fas fa-fw fa-table'></i>
          <span>Tables</span></a>
      </li>
    </ul>";
 ?>