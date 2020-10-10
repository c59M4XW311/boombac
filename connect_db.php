<?php

/** Открытие коннекта */
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "boombac";
    $dbpass = "boombac";
    $db = "boombac";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

    return $conn;
}

/** Закрытие коннекта */
function CloseCon($conn)
{
    $conn -> close();
}
?>