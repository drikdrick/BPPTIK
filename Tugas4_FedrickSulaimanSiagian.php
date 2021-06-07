<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Jumlah Bintang= <input type="text" name="jumlah">
        <br>
        <input type="submit" value="kirim">
    </form>

    <?php
        if (isset($_POST['jumlah'])) {
            for ($i=0; $i < $_POST['jumlah']; $i++) { //loop pertama untuk menentukan banyak baris
                for ($j=0; $j <= $i ; $j++) { //loop ke-2 untuk menentukan banyak bintang tiap baris
                    echo "*";
                }
                echo "<br>";
            }
        }
    ?>
</body>
</html>
