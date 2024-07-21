<html>
    <head>
        <title>REGISTRATION PAGE</title>
        <script src="../assets/js/color-modes.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            .container
            {
                height:auto;
                width:600px;
            }
        </style>
        <script>
            function check()
            {
                var a=document.getElementById('a').value;
                if(a.length==0)
                {
                    document.getElementById('a1').innerHTML="Valid first name is required.";
                }
                var b=document.getElementById('b').value;
                if(b.length==0)
                {
                    document.getElementById('b1').innerHTML="Valid last name is required.";
                }
                var c=document.getElementById('c').value;
                if(c.length==0)
                {
                    document.getElementById('c1').innerHTML="Valid Username is required.";
                }
                var d=document.getElementById('d').value;
                if(d.length==0)
                {
                    document.getElementById('d1').innerHTML="Valid email address is required.";
                }
                var e=document.getElementById('e').value;
                if(e.length==0)
                {
                    document.getElementById('e1').innerHTML="Valid password is required.";
                }
                var e1=document.getElementById('e2').value;
                if(e1.length==0)
                {
                    document.getElementById('e3').innerHTML="Valid password is required.";
                }
                else if(e1!=e)
                {
                    document.getElementById('s1').innerHTML="Input must be same as password.";
                }
            }
        </script>
</head>
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
    <br><br>
    <div class="container" style="background-color: whitesmoke;">
          <div class="py-5 text-center">
            <h2>SIGN UP</h2>
          </div>
            <div class="col-md-7 col-lg-8 align-items-center offset-md-2 offset-lg-2">
              <form class="needs-validation" method="post" enctype="multipart/form-data">
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control" id="a" name="a"  placeholder="First Name">
                    <div id="a1">
                    </div>
                  </div>
      
                  <div class="col-sm-6">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="b" name="b" placeholder="Last Name" required>
                    <div id="b1">
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text">@</span>
                      <input type="text" class="form-control" id="c" name="c" placeholder="Username" required><br>
                    <div id="c1">
                      </div>
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="d" placeholder="you@example.com" name="d" >
                    <div id="d1">
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="passw" class="form-label">Password</label>
                    <input type="password" class="form-control" id="e" name="e" placeholder="Password">
                    <div id="e1">
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="passw1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="e2" placeholder="Password">
                    <div id="e3">
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="files" class="form-label">Upload file</label>
                    <input type="file" class="form-control" id="f" name="f1" required>
                  </div>
                  <div align="center">
                    <button class="btn btn-primary"  onclick="check()" name='sub'>SIGN UP</button>
                  </div>
                </div>
                </form>
</form>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","weave");
if(isset($_POST['sub']))
{
    $a=mysqli_escape_string($con,$_POST['a']);
    $b=$_POST['b'];
    $n=$a." ".$b;
    $c=$_POST['c'];
    $d=$_POST['d'];
    $e=$_POST['e'];
    $f=$_FILES['f1']['name'];
    if(move_uploaded_file($_FILES['f1']['tmp_name'],getcwd()."\\new\\$f"))
    {
        $ins=mysqli_query($con,"CREATE TABLE $c(Sl_No int primary key auto_increment,P_Name varchar(100),Cost float,IMG varchar(200))");
        $ins1=mysqli_query($con,"INSERT INTO users VALUES('','$n','$c','$e','$d','$f')");
    }
}