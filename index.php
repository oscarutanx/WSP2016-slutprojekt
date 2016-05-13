<?php

session_start();
require "details.php";  /*inkluderar info till databas osv */
require "./views/head.php";     /* inkluderar "Kroppen" så man kan ha dynamisk sida och inte behöva ladda in onödigt mycket kod varjre gång*/

$page="index";
if (isset($_GET["page"])&&isset($_GET["page"]))     /*kollar ifall get-variabeln är set */
{
    $page = $_GET["page"];
}
if(file_exists("views/{$page}.php"))        /*kollar upp mo filen med namn = getvariabel.php och visar ifall det finns*/
{
    require("./views/{$page}.php");
}
else        /* ifall man försöker med en get variabel som inte finns så går den automatiskt till index */
{
    require("views/index.php");
}



require ("./views/footer.php");  /*visar en footer */
