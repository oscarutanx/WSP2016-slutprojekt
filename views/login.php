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

<form class="form-horizontal" action="doLogin.php" method="POST">
    <h1>Sign in here</h1>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPW" name="inputPW" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Sign in</button>
        </div>
    </div>
</form>