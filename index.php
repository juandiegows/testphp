<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once __DIR__ . "/vendor/autoload.php";

    use Dotenv\Dotenv;



    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    $nombre = "test desde php";
    require_once __DIR__ . "/conexion.php";
    try {
        $sentencia = $mysqli->prepare("INSERT INTO gender (name) VALUES (?)");
        $sentencia->bind_param("s", $nombre);
        echo  $sentencia->execute();
    } catch (\Throwable $th) {
        echo $th;
    }

    ?>
    <form action="" method="get">
        <input type="text" name="name" id="">
        <input type="submit" value="Value">
    </form>
</body>

</html>