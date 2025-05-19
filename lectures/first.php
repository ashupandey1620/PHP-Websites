<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>This is a <?php
    echo "awesome";
    ?> Paragraph</p>
    <?php
    echo "Hello World in PHP";
    ?>

    <?php
    $name = "Dani Krossing";
    echo $name;
    ?>

    <?php
    //Scaler Types (contain one value)
    $string = "Daniel";
    $int = 123456;
    $float = 23.67;
    $bool = true;

    //Array Type (Contain Multiple Values)
    $names = ["Daniel","Bella","Frida"];
    $names2 = array("Daniel","Bella","Frida");

    $names3; 

    //Object Type
    // $object = new Car();

    $array = [];

    $object = null;

    //should always assign anything like a default value otherwise the interpreter will give an error
    ?>

    <?php
    echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["SERVER_NAME"];
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];

    ?>

    <?php
    echo "<br>";
    echo $_GET["name"];
    echo "<br>";
    echo $_GET["eyeColor"];
    echo "<br>";
    echo $_REQUEST["eyeColor"];
    echo "<br>";
    // echo $_COOKIE["eyeColor"];
    echo "<br>";
    $_SESSION["userName"] = "Krossing";
    echo $_SESSION["userName"];


    ?>
</body>
</html>