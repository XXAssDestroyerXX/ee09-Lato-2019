<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="style5.css">
</head>

<body>

    <div class=".gorny-lewy">
        <img src="logo1.png" alt="Mój kalendarz">
    </div>

    <div class=".gorny-prawy">
        <h1>KALENDARZ</h1>
        <p>miesiąc: lipiec, rok:2020</p>
    </div>

    <footer class="stopka">
        <form action="kalendarz.php" method="POST">
            <label for="wpis">dodaj wpis:<input type="text" name="wydarzenie"> <button type="submit">DODAJ</button></label>
            <br>
            <br>
            <p>Kacper Kamiński 4GH</p>
        </form>
    </footer>

</body>
</html>