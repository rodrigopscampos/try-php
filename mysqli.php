<?php

    $mysqli = new mysqli("localhost", "developer", "developer", "senai");

    echo nl2br("Host: localhost\n\n");

    
    if($mysqli->connect_errno) {
        echo "Failed to connect to MySql: (" . $mysqli->connect_errno . ") ";
    }

    $sql = "SELECT ID, NAME, GENDER, BIRTHDAY, PEP FROM CUSTOMERS ORDER BY ID";
    
    $dr = $mysqli->query($sql);

    if(! $dr) {
        echo nl2br("Could not perform query.\n");
        return;
    }
?>

    <table border=1>
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Gênero</td>
        <td>Dt. Nascimento</td>
        <td>PEP</td>
    </tr>

<?php
    foreach($dr as $row) {
        print '<tr>';
        print '<td>' . $row['ID'] . "</td>";
        print '<td>' . $row['NAME'] . "</td>";
        print '<td>' . $row['GENDER'] . "</td>";
        print '<td>' . $row['BIRTHDAY'] . "</td>";
        print '<td>' . $row['PEP'] . "</td>";
        print '</tr>';
    }
?>

</table>
