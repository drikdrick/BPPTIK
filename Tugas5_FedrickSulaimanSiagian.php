<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Bilangan 1= <input type="number" name="bil1"><br>
        Bilangan 2= <input type="number" name="bil2">
        <br>
        <input type="submit" value="Hitung">
    </form>
    <hr>
    <hr>
    <?php
        if (isset($_POST['bil1']) && isset($_POST['bil2'])) {
            echo "hasil penjumlahan adalah: " . penjumlahan($_POST['bil1'], $_POST['bil2']) . "<br>";
            echo "hasil pengurangan adalah: " . pengurangan($_POST['bil1'], $_POST['bil2']) . "<br>";
            echo "hasil perkalian adalah: " . perkalian($_POST['bil1'], $_POST['bil2']) . "<br>";
            echo "hasil pembagian adalah: " . pembagian($_POST['bil1'], $_POST['bil2']) . "<br>";
        }

        function penjumlahan ($bil1, $bil2){
            return $bil1 + $bil2;   
        }
        function pengurangan ($bil1, $bil2){
            return $bil1 - $bil2;   
        }
        function perkalian ($bil1, $bil2){
            return $bil1 * $bil2;   
        }
        function pembagian ($bil1, $bil2){
            return $bil1 / $bil2;   
        }
    ?>
</body>
</html>
