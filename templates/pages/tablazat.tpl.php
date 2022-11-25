<table id="tablazat">
    <tr>
        <th>Név</th>
        <th>Üzenet</th>
        <th>Idő</th>
    </tr>
<?php
    $dbh = new PDO('mysql:host=localhost;dbname=beadando', 'root', '',
                            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $sqlSelect = "select nev, uzenet, ido from uzenetek ORDER BY ido DESC;";
    $sth = $dbh->prepare($sqlSelect);
    $sth->execute();
    while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>".$row["nev"]."</td><td>".$row["uzenet"]."</td><td>".$row["ido"]."</td></tr>";
        }
?>
</table>