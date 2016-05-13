<?php

session_start();
require "details.php";  /*inkluderar info till databas osv */
require "./views/head.php";     /* inkluderar "Kroppen" s� man kan ha dynamisk sida och inte beh�va ladda in on�digt mycket kod varjre g�ng*/

$page="index";
if (isset($_GET["page"])&&isset($_GET["page"]))     /*kollar ifall get-variabeln �r set */
{
    $page = $_GET["page"];
}
if(file_exists("views/{$page}.php"))        /*kollar upp mo filen med namn = getvariabel.php och visar ifall det finns*/
{
    require("./views/{$page}.php");
}
else        /* ifall man f�rs�ker med en get variabel som inte finns s� g�r den automatiskt till index */
{
    require("views/index.php");
}



require ("./views/footer.php");  /*visar en footer */
