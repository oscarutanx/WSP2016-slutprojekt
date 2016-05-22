
<?php


$username = "projektx";
$password = "projekty";
$database="projekt";
$host="localhost";
$dsn = "mysql:host=$host;dbname=$database;charset=utf8";
$dbh = new PDO($dsn, $username, $password);
$result = $dbh->query('SELECT * FROM wall');

foreach ($result as $row){

    echo '<div class="main container">
        <div class="row">
            <div class="card-block">
                <h4 class="card-title">' . $row["author"] . '</h4>
             <p class="card-text">' . $row["text"] . '</p> </div> </div> </div>';


}