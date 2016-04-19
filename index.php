<?php
/**
 * Created by PhpStorm.
 * User: Oscar
 * Date: 2016-04-05
 * Time: 12:50
 */
session_start();
/**require "./views/details.php";*/
require "./views/head.php";

$page="index";
if (isset($_GET["page"])&&isset($_GET["page"]))
{
    $page = $_GET["page"];
}
if(file_exists("views/{$page}.php"))
{
    require("./views/{$page}.php");
}
else
{
    require("views/index.php");
}



require ("./views/footer.html");
