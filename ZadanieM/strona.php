<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> TEST </h1>

<div id="1">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "filmweb";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT gatunek, rok_premiery_pl, rok_premiery FROM filmy";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo "gatunek: " . $row["gatunek"]. " " . $row["rok_premiery_pl"]. " " . $row["rok_premiery"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</div>

</body>
</html>