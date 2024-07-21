<?php
$con=mysqli_connect("localhost","root","","weave");
?>
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
<body style="background-color: antiquewhite;">
    <br><br>
    <div class="container" style="background-color: whitesmoke;">
          <div class="py-5 text-center">
            <h2>SIGN UP</h2>
          </div>
            <div class="col-md-7 col-lg-8 align-items-center offset-md-2 offset-lg-2">
              <form class="needs-validation" method="post">
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control" id="a" placeholder="First Name">
                    <div id="a1" width="auto" height="auto">
                    </div>
                  </div>
      
                  <div class="col-sm-6">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="b" placeholder="Last Name" required>
                    <div id="b1">
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text">@</span>
                      <input type="text" class="form-control" id="c" placeholder="Username" required><br>
                    <div id="c1">
                      </div>
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="d" placeholder="you@example.com">
                    <div id="d1">
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="passw" class="form-label">Password</label>
                    <input type="password" class="form-control" id="e" placeholder="Password">
                    <div id="e1">
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="passw1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="e2" placeholder="Password">
                    <div id="e3">
                    </div>
                  </div>
                  <div align="center">
                    <button class="btn btn-primary"  onclick="check()">SIGN UP</button>
                  </div>
                </div>
                </form>
</form>
</body>
</html>
