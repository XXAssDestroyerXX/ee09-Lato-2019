<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Wędkujemy</title>

</head>

<body>
<header>
    <h1>Portal dla wedkarzy</h1>
</header>
<div id="lewy">
<h3><strong>Ryby drapieżne naszych wód</strong></h3>
<ul>
    <?php 
    $db = new mysqli('localhost','root','','wedkowanie');
    $sql = "SELECT nazwa, wystepowanie FROM `ryby` where styl_zycia = 1";
    $wynik = $db->query($sql);
    while($wiersz = $wynik->fetch_assoc()) {
        $nazwa = $wiersz['nazwa'];
        $wystepowanie = $wiersz['wystepowanie'];
        echo "<li>$nazwa, wystepowanie: $wystepowanie</li>";
    }
    $db->close();
    
    ?>
</ul>
</div>
<div id="prawa">
  <img src="https://4.bp.blogspot.com/-Rp_mnnLIiSk/XZFfXCku9_I/AAAAAAAAEAI/nKebrMZc_AYGur8QQ-uOWKXRwyjM19vZwCLcBGAsYHQ/s640/ryba1.jpg" alt="sum">
  <a herf="url"><U>Pobierz Kwerendy</U></a><br>
</div>

<footer>
    <p>stronę wykonał: Kacper Kamiński</p>
</footer>

</body>
</html>