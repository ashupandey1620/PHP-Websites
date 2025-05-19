<?php
var_dump($_SERVER["REQUEST_METHOD"]);

//best way to do this
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favpet = htmlspecialchars($_POST["favpet"]);


    if(empty(firstname)){
        exit();
        header("Location: ../index.php");
    }

    //Always use server side security, don not rely on client side
    echo "These are the datas that the user submitted:";

    echo "<br>";
    echo $firstname;

    echo "<br>";
    echo $lastname;

    echo "<br>";
    echo $favpet;

    header("Location: ../index.php");
} else {
    header("Location: ../index.php");
}