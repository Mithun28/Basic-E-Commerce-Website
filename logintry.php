<html>
    <head>
        <title>
            Login
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

        <style>
          
          .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
       </style>
          
    </head>
    <body style="background-color:  #2B2A4C; align-content: center;">
    <body style="background-color: #2B2A4C;">
<div class="container-fluid d-flex w-100 p-3 mx-auto flex-column" id="head" style="vertical-align: middle;">
        <header  class="mb-auto">
          <div>
            <h3 class="float-md-start mb-0" style="color:white;">WEAVE</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
              <a class="nav-link fw-bold py-1 px-0" href="mainp.php">HOME</a>
            </nav>
          </div>
        </header>
      </div>
      <br><br><br>
    <div class="container col-lg-4 offset-lg-4" style="background-color: #FAF9F6;height:500px;border-radius:10px;">
            <div class="row" >
                <h1 align="center">LOGIN</h1>
            </div>
            <br><br><br>
            <div class="row">
              <div class="col-lg-7 offset-lg-2">
            <form method="post">
              <div class="form-floating col-lg-9 offset-lg-2">
                <input type="text" class="form-control" id="floatingInput" placeholder="User Name" name="a">
                <label for="floatingInput">User Name</label>
              </div><br>
              <div class="form-floating col-lg-9 offset-lg-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="b">
                <label for="floatingPassword">Password</label>
              </div><br>

              <div class="form-check text-start my-3 col-lg-9 offset-lg-2">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault" >
                <label class="form-check-label" for="flexCheckDefault">
                  Remember me
                </label>
              </div>
              <div class="col-lg-9 offset-lg-6">
              <button class="btn btn-primary py-2" type="submit" name="sub" id="sub">Sign in</button>
    </div>
            </form>
    </div>
            </div>
        </div>
    </div>
    

<?php
$con=mysqli_connect("localhost","root","","weave");
if(isset($_POST['sub']))
{
$a=$_POST['a'];
$b=$_POST['b'];
$sel=mysqli_query($con,"SELECT * FROM users WHERE USERID='$a' and PASSWRD='$b'");
if(mysqli_num_rows($sel)>0)
{
    session_start();
    $_SESSION['USR']=$a;
    if($a=="admin")
    {
      header("location:adminp.php");
      exit;
    }
    else
    {
      header("location:userp.php");
      exit;
    }
    
}
else{
    ?><p align="center" style="background-color:white;"><?php echo "INVALID USERID/PASSWORD";?></p><?php
}
}
?>
</body>
</html>