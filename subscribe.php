<?php

$host="localhost";
$username="nullatec_forms";
$password="3Rnullatech";
$dbname="nullatec_newsletter";

$link = mysqli_connect($host,$username,$password,$dbname);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


if(isset($_POST['submit_form']))
{

    $email=$_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        mysqli_query($link, "insert into newsletter (email) values ('$email')");
        header( "Location: index.html" );
    } else {
        header( "Location: index.html" );
    }

}

mysqli_close($link);
?>
