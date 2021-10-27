<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>

<?php
$username = "root"; 
$password = ""; 
$database = "filmweb"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM autor";
$sql = "INSERT INTO autor (imie, nazwisko, rok_debiutu, ilość_filmów)
VALUES ('John', 'Doe', '04.06.2000','8')";

echo "<h2>Status 1: Connected!</h2>";

echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td><h3> <font face="Arial">Imie</font> </h3></td> 
          <td><h3> <font face="Arial">nazwisko</font> </h3></td> 
          <td><h3> <font face="Arial">rok debiutu</font> </h3></td> 
          <td><h3> <font face="Arial">Ilość Produkcji</font> </h3></td> 
      </tr>';
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $Imie = $row["imie"];
        $Nazwisko = $row["nazwisko"];
        $Rokdebiutu = $row["rok_debiutu"];
        $Ilosc = $row["ilość_filmów"];

        echo '<tr> 
                  <td>'.$Imie.'</td> 
                  <td>'.$Nazwisko.'</td> 
                  <td>'.$Rokdebiutu.'</td> 
                  <td>'.$Ilosc.'</td> 
              </tr>';
    }
    $result->free();
} 
if ($mysqli->query($sql) === TRUE) {
    echo "Utworzono nowy rekord!<br>";
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }
$mysqli -> close();

echo "Status 2: Rozłączono"
?>


</form>


</body>
</html>