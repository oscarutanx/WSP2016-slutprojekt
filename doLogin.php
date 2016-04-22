<?php
session_start();
require_once ("details.php");
if (isset($_POST["exampleInputEmail1"])&&isset($_POST["exampleInputEmail1"]))
{
    $epost = filter_input(INPUT_POST, 'exampleInputEmail1', FILTER_SANITIZE_SPECIAL_CHARS);


    // $epost = $_POST["exampleInputEmail1"];
    $pass = $_POST["exampleInputPassword1"];
    // echo $epost;
    //echo $pass;
    $dbh=new PDO($dsn,$username,$password);
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
            //Login
            $userInfo=$result->fetch(PDO::FETCH_ASSOC);
            $user = $userInfo['username'];
            $_SESSION['epost'] = $epost;
            $_SESSION['user']= $user;
            header("Location:index.php");
        }


    }




}

