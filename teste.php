<?php
$json = file_get_contents("peitoral.json");
$data =  json_decode($json);
//var_dump($data);

if (count($data->itens)) {

echo "<thead>
    <tr>
      <th>Item</th>
      <th>Serie</th>
      <th>Repetição</th>
      <th>Carga</th>
    </tr>
</thead>

<tbody>";

    // Cycle through the array
    foreach ($data->itens as $idx => $stand) {
        // Output a row
        echo "<tr>";

        echo "<td>$stand->ITEM</td>";
        echo "<td>

        <div class='btn-group'>
            <button class='btn btn-secondary btn-sm dropdown-toggle' type='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
              Banco
            </button>
            <div class='dropdown-menu'>
              ...
            </div>
          </div>

        </td>";
        echo "<td>
          <select name='serie'>
            <option value='10'>10</option>
            <option value='20'>20</option>
            <option value='30'>30</option>
            <option value='40'>40</option>
          </select>
        </td>";
        echo "<td>
          <div class='btn-group'>
            <button class='btn btn-secondary btn-sm dropdown-toggle' type='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
              30
            </button>
            <div class='dropdown-menu'>
              ...
            </div>
          </div>
        </td>";
        echo "</tr>";
    }
    // Close the table
    echo "</tbody>";

}
 