<?php
function performQuery($dsn, $user, $password) {

    echo nl2br('Host: ' . $dsn . "\n\n");

    try {
        $conn = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        return;
    }

    echo nl2br("Connection success !\n");


    $sql = "SELECT ID, NAME, GENDER, BIRTHDAY, PEP FROM CUSTOMERS ORDER BY ID";

    $dr = $conn->query($sql);

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
}
?>

</table>
