<?php
/**
 * Created by PhpStorm.
 * User: Oscar
 * Date: 2016-05-22
 * Time: 23:02
 */
require_once("details.php");
if(isset($_POST["walltext"]))
{
    session_start();
    $dbh = new PDO($dsn, $username, $password);
    $text = filter_input(INPUT_POST, 'walltext', FILTER_SANITIZE_SPECIAL_CHARS);
    $user=$_SESSION['user'];

    $result = $dbh->exec("INSERT INTO wall (text,author) VALUES ('$text','$user')");
    if (!$result) {
        print_r($dbh->ErrorInfo());
    } else {
        echo "<script type='text/javascript'>alert('Posted to wall!')</script>"; //visar ett meddelande att kontot ?r skapat
        echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>"; //g?r som header fast med en 1500ms delay
    }
    $dbh = null;
}