<!DOCTYPE html>
<html>
<body>
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="form.css" type="text/css">

<?php
include 'connection.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($mysqli, $sql); // First parameter is just return of "mysqli_connect()" function
$count = 0;
echo "<br>";
echo "<table border='1'>";
while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
    echo "<tr>";
    foreach ($row as $field => $value) {
         // I you want you can right this line like this: foreach($row as $value) {
            if(($count%5)==4)
            {
                echo "<td> <img src =" . $value . "></td>";
            }
            else
            {
        echo "<td>" . $value . "</td>";} // I just did not use "htmlspecialchars()" function. 
        $count++;
    }
    echo "</tr>";
}
echo "</table>";

?>
</body>
</html>