<?php 
    $a = isset($_GET['a']) ? $_GET['a'] : null;
    $b = isset($_GET['b']) ? $_GET['b'] : null;

    if (is_numeric($a) && is_numeric($b)) {
        $c = (3 * $a - $b) / 2;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <label>Vrijednost a:</label><input type="number" name="a"> <br> <br>
        <label>Vrijednost b:</label><input type="number" name="b">
        <input type="submit">
    </form>

    <?php if (isset($c)):?>
        <p>Rješenje je: <?php echo $c ?></p>
    <?php endif; ?>
</body>
</html>