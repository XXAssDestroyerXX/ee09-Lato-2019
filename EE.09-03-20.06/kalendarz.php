<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moj kalendarz</title>
    <link rel="stylesheet" href="style5.css">
</head>



<body>
    <div id="A1">
        <img src="kalendarz.png" alt="Moj kalendarz">
    </div>
    <div id="A2">
        <h1>KALENDARZ</h1>
        <?php //mysql
            $db = new mysqli('localhost','root','','egzamin5');
            $query = "SELECT miesiac, rok FROM `zadania` WHERE dataZadania = \"2020-07-01\";";
            $result = $db->query($query);

            while ($row = $result->fetch_assoc()){ //rzedy
                $miesiac = $row['miesiac']; 
                $rok = $row['rok'];
                echo "<h3>miesiąc: $miesiac, rok: $rok</h3>";
            }
            $db->close(); //end
        ?>
    </div>



    <main>
        <?php //mysql
            $db = new mysqli('localhost','root','','egzamin5');
            $query = "SELECT dataZadania, wpis FROM `zadania` WHERE miesiac = 'lipiec';";
            $result = $db->query($query);
            while ($row = $result->fetch_assoc()) { //rzedy
            $data = $row['dataZadania']; 
            $wpis = $row['wpis'];
            echo '<div>';
            echo "<h5>$data</h5>";
            echo "<p>$wpis</p>";
            echo '</div>';
            }
            $db->close(); //end
        ?>
    </main>


        <?php //mysql
            $db = new mysqli('localhost','root','','egzamin5');
            if (isset($_POST['wydarzenie'])) {
            $wydarzenie = $_POST['wydarzenie'];
            $query = "UPDATE zadania SET wpis = '$wydarzenie' WHERE dataZadania = '2020-07-13'";
            $db->query($query);
            $db->close(); //end
            }
        ?>


    <footer>
        <form action="kalendarz.php" method="post">
            <label for="wydarzenie">Dodaj wpis</label>
            <input type="text" name="wydarzenie">
            <button type="submit">Dodaj</button><br>
            <p>Strone wykonał: Kacper Kamiński</p>
        </form>
    </footer>
</body>
</html>