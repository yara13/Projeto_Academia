<?php
$json = file_get_contents("pessoa.json");
$data =  json_decode($json);

if (count($data->pessoa)) {

echo "<thead>
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
<tbody>";

    // Cycle through the array
    foreach ($data->pessoa as $idx => $stand) {
        // Output a row
        echo "<tr>";
        echo "<td>$stand->Name</td>";
        echo "<td>$stand->Position</td>";
        echo "<td>$stand->Age</td>";
        echo "<td>$stand->Startdate</td>";
        echo "<td>$stand->Salary</td>";
        echo "<td>$stand->Position</td>";
        echo "</tr>";
    }
    // Close the table
    echo "</tbody>";

}
 