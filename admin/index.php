<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../bootstrap/style.css" />
  </head>
  <body id="loginpage" onload="welcome()">
    <div class="container d-flex justify-content-center mt-5 pt-5">
      <form class="bg-success text-white p-5">
        <div class="alert alert-danger" role="alert" id="alert" style="display: none"></div>
        <div class="alert alert-success" role="alert" id="alertok" style="display: none"></div>
        <div id="judul" class="mt-3">Login Admin</div>
        <hr />
        <div class="mb-4">
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" class="form-control" id="username" />
        </div>
        <div class="mb-4">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" />
        </div>
        <button type="button" class="btn btn-primary" onclick="ceklogin()">Login</button>
        <a href="../">Kembali</a>
      </form>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="javascript/main.js" type="text/javascript"></script>
  </body>
</html>
