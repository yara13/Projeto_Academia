

<thead>
  <tr>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Idade</th>
    <th>Início</th>
    <th>Mensalidade</th>
    <th>Situação</th>
  </tr>
</thead>
<tfoot>
  <tr>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Idade</th>
    <th>Início</th>
    <th>Mensalidade</th>
    <th>Situação</th>
  </tr>
</tfoot>
<tbody>

  <?php 


  include './funcoes/conn.php';



  $sql = "SELECT * FROM usuario ";

  $resultado = $conn->query($sql);

  if ($resultado->num_rows > 0) {
    while($linha = $resultado->fetch_assoc()) {

      $id             = $linha["id"];
      $nome           = $linha["nome"];
      $data           = $linha["data_de_nascimento"];
      $email          = $linha["email"];
      $CPF            = $linha["cpf"];
      $data_cadastro  = $linha["data_cadastro"];
      $situacao       = $linha["situacao"];
      $tipo           = $linha["tipo"];




      $idade = calculo_idade($data);


      if($tipo == 1){

        ?>

        <tr>
          <td><?php echo $nome; ?></td>
          <td><?php echo $email; ?></td>
          <td><?php echo $idade; ?></td>
          <td><?php echo $data_cadastro; ?></td>
          <td></td>
          <td><?php echo $situacao; ?></td>
        </tr>

        <?php  
      }
    }
  }

  function calculo_idade($data) {
        //Data atual
    $dia = date('d');
    $mes = date('m');
    $ano = date('Y');
        //Data do aniversário
        /*
        $nascimento = explode('/', $data);
        $dianasc = ($nascimento[0]);
        $mesnasc = ($nascimento[1]);
        $anonasc = ($nascimento[2]);
        */
        // se for formato do banco, use esse código em vez do de cima!
        
        $nascimento = explode('-', $data);
        $dianasc = ($nascimento[2]);
        $mesnasc = ($nascimento[1]);
        $anonasc = ($nascimento[0]);
        
        //Calculando sua idade
        $idade = $ano - $anonasc; // simples, ano- nascimento!
        if ($mes < $mesnasc){
          $idade--;
          return $idade;
        }elseif ($mes == $mesnasc && $dia <= $dianasc){
          $idade--;
          return $idade;
        }else{
          return $idade;
        }
      }

      ?>


    </tbody>

