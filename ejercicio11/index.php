<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Menu</h1>
    <ul>
        <div>
            <form action="valores.php" method="get">
                <input type="hidden" name="opcion" value="1">
                <input type="submit" value="Fibonacci">
            </form>
        </div>
        <div>
            <form action="valores.php" method="get">
                <input type="hidden" name="opcion" value="2">
                <input type="submit" value="Calcular mayor">
            </form>
        </div>
        <div>
            <form action="valores.php" method="get">
                <input type="hidden" name="opcion" value="3">
                <input type="submit" value="Piramide">
            </form>
        </div>
    </ul>
</body>

</html>