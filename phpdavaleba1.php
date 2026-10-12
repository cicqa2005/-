<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Saxelfaso uwyisi</title>
</head>
<body>

<h2>Saxelfaso uwyisi</h2>

<form method="get">
    Saxeli: <input type="text" name="saxeli"><br>
    Gvari: <input type="text" name="gvari"><br>
    Tanamdeboba: <input type="text" name="tanamdeboba"><br>
    Xelfasi: <input type="text" name="xelfasi"><br>

    Gadasaxadi:
    <select name="procenti">
        <option>5</option>
        <option>10</option>
        <option>15</option>
        <option>18</option>
        <option>20</option>
        <option>25</option>
    </select>
    <br><br>

    <input type="submit" name="gagzavna" value="Gagzavna">
</form>

<?php
if (isset($_GET["gagzavna"])) {

    $saxeli = $_GET["saxeli"];
    $gvari = $_GET["gvari"];
    $tanamdeboba = $_GET["tanamdeboba"];
    $xelfasi = $_GET["xelfasi"];
    $p = $_GET["procenti"];

    // 20% ფიქსირებული
    $gad1 = ($xelfasi * 20) / 100;
    $xelze1 = $xelfasi - $gad1;

    // არჩეული პროცენტი
    $gad2 = ($xelfasi * $p) / 100;
    $xelze2 = $xelfasi - $gad2;

    echo "<h3>Shedegi</h3>";

    echo "<table border='1' cellpadding='5'>";
    echo "<tr>
            <th>Saxeli</th>
            <th>Gvari</th>
            <th>Tanamdeboba</th>
            <th>Xelfasi</th>
            <th>Gadasaxadi 20%</th>
            <th>Xelze 20%</th>
            <th>Gadasaxadi $p%</th>
            <th>Xelze $p%</th>
          </tr>";

    echo "<tr>
            <td>$saxeli</td>
            <td>$gvari</td>
            <td>$tanamdeboba</td>
            <td>$xelfasi</td>
            <td>$gad1</td>
            <td>$xelze1</td>
            <td>$gad2</td>
            <td>$xelze2</td>
          </tr>";

    echo "</table>";
}
?>

</body>
</html>
