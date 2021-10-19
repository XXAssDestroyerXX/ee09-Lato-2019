<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="style5.css">
</head>



<body>
    <div id="A1">
        <img src="kalendarz.png" alt="Mój kalendarz">
    </div>
    <div id="A2">
        <h1>KALENDARZ</h1>
        <?php
            $db = new mysqli('localhost', 'root', '', 'egzamin5');
            $query = "SELECT miesiac, rok FROM `zadania` WHERE dataZadania = \"2020-07-01\";";
            $result = $db->query($query);
            while ($row = $result->fetch_assoc()){
                $miesiac = $row['miesiac'];
                $rok = $row['rok'];
                echo "<h3>miesiąc: $miesiac, rok: $rok</h3>";
            }
            $db->close();
        ?>
    </div>
    <main>
        <?php
            $db = new mysqli('localhost', 'root', '', 'egzamin5');
            $query = "SELECT dataZadania, wpis FROM `zadania` WHERE miesiac = 'lipiec';";
            $result = $db->query($query);
            while ($row = $result->fetch_assoc()) {
                $data = $row['dataZadania'];
                $wpis = $row['wpis'];
                echo '<div>';
                echo "<h5>$data</h5>";
                echo "<p>$wpis</p>";
                echo '</div>';
            }
            $db->close();
        ?>
    </main>
    <?php
        $db = new mysqli('localhost', 'root', '', 'egzamin5');
        if (isset($_POST['wydarzenie'])) {
            $wydarzenie = $_POST['wydarzenie'];
            $query = "UPDATE zadania SET wpis = '$wydarzenie' WHERE dataZadania = '2020-07-13'";
            $db->query($query);
            $db->close();
        }
    ?>
    <footer>
        <form action="kalendarz.php" method="post">
            <label for="wydarzenie">dodaj wpis:</label>
            <input type="text" name="wydarzenie">
            <button type="submit">DODAJ</button><br>
            <p>Stronę wykonał: 02291907596</p>
        </form>
    </footer>
</body>
</html>