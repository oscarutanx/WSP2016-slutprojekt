<?php
session_start();
require_once ("details.php");
if (isset($_POST["inputEmail"])&&isset($_POST["inputEmail"]))
{
    $epost = filter_input(INPUT_POST, 'inputEmail', FILTER_SANITIZE_SPECIAL_CHARS);
    //filtrerar bort o�nskade tecken och liknande f�r att motverka XSS
    $pass = $_POST["inputPW"];
    $dbh=new PDO($dsn,$username,$password);

    //kollar med select om det finns n�gon rad d�r inloggnignsdetaljerna finns med och om den inte f�r framma n�gra
    //rader med kriteriena s� skrivs det ut att anv�ndaren inte finns
    //annars s� loggar den in anvn�ndaren
    $result=$dbh->query("SELECT * FROM users WHERE email = '$epost' AND password = '$pass'");
    if(!$result)
    {
        print_r($dbh->ErrorInfo());
    }
    else{
        if($result->rowCount()==0) {
            $_SESSION['message'] = "User not found";
            header("Location:index.php?page=login");
        }
        else{
            //Login kollar om l
            $userInfo=$result->fetch(PDO::FETCH_ASSOC);
            $user = $userInfo['username'];
            $_SESSION['epost'] = $epost;
            $_SESSION['user']= $user;
            header("Location:index.php");
        }


    }




}

