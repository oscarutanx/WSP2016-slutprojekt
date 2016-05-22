<?php
/**
 * Created by PhpStorm.
 * User: Oscar
 * Date: 2016-04-22
 * Time: 12:47
 */


?>
<!-- Form med css från bootstrap
används för att logga in på sidan med POST -->

<form action="doLogin.php" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="InputEmail" placeholder="Email" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="InputPW" placeholder="Password" required>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>