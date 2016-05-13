
<h3>Skapa Konto</h3>
<form  method="post" action="index.php?page=signup">
    <div class="form-group">
        <label for="user">Username:</label>
        <input class="form-control" type="text" id="name" name="user" required/>
    </div>
    <div class="form-group">
        <label for="firstname">Firstname:</label>
        <input class="form-control" type="text" id="name" name="firstname" required/>
    </div>
    <div class="form-group">
        <label for="surname">Surname:</label>
        <input class="form-control" type="text" id="name" name="surname" required/>
    </div>
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input class="form-control" type="email" id="email" name="email" required/>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input class="form-control" type="password" id="pw" name="password" required/>
        <button class="btn btn-default" type="submit">Sign Up</button>
    </div>
</form>



<?php

if(isset($_POST["firstname"]) && isset($_POST["surname"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["user"]))
{
    $dbh = new PDO($dsn, $username, $password);
    $pw = $_POST["password"];
    $fname =$_POST["firstname"];
    $sname = $_POST["surname"];
    $email = $_POST["email"];
    $user = $_POST["user"];
    $hash = password_hash($pw, PASSWORD_DEFAULT);

    $result = $dbh->exec("INSERT INTO users (username,firsname,surname,email,password) VALUES ('$user','$fname','$sname','$email', '$hash')");
    if (!$result) {
        print_r($dbh->ErrorInfo());
    } else {
        echo "<script type='text/javascript'>alert('Account created!')</script>"; //visar ett meddelande att kontot ?r skapat
        echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>"; //g?r som header fast med en 1500ms delay
    }
    $dbh = null;
}
