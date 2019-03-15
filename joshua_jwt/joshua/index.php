<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
</head>
<body>
<section>
    <div class="card-body">
    <form class="form" role="form" autocomplete="off" id="formLogin" method="post" action = "php/login.php">
        <div class="form-group">
            <label for="uname1">Username</label>
            <input type="text" class="form-control form-control-lg rounded-0" name="uname" id="uname" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control form-control-lg rounded-0" id="pass" name = "pass" required autocomplete="new-password">
        </div>
        <button type="submit" class="btn btn-lg btn-info float-right" id="btnLogin">Login</button>
    </form>
</div>
</section>
</body>
</html>