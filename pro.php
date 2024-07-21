<html>
    <head>
        <title>REGISTRATION PAGE</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            input {
                margin: 0.25em 0em 1em 0em;
                outline: none;
                padding: 0.5em;
                border: none;
                background-color: rgb(225, 225, 225);
                border-radius: 0.25em;
                color: black;
            }
            form {
                border: 3px solid white;
                 display: flex;
                flex-direction: column;
                align-items: center;
            }

      </style>
</head>
<body style="background-color: #2B2A4C">
<div class="container-fluid d-flex w-100 p-3 mx-auto flex-column" id="head" style="vertical-align: middle;">
        <header  class="mb-auto">
          <div>
            <h3 class="float-md-start mb-0" style="color:white;">WEAVE</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
              <a class="nav-link fw-bold py-1 px-0" href="adminp.php">BACK</a>
            </nav>
          </div>
        </header>
      </div>
    <br><br><br>
    <div class="row">
    <div class="col-lg-4 offset-lg-4" style="background-color:white;border-radius:20px;">
    <br>
    <h1 align="center"> ADD PRODUCT</h1>
    <br>
    <form method="post" enctype="multipart/form-data">
    <h6>NAME</h6>
    <input type="text" name="a"></input>
    <h6>PRICE IN DOLLARS</h6>
    <input type="number" name="b"></input>
    <h6>PHOTO</h6>
    <input type="file" name="c"></input>
    <button class="btn btn-primary" name="sub">REGISTER</button>
    <br>
    <br>
</form>
</div></div>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","weave");
if(isset($_POST['sub']))
{
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_FILES['c']['name'];
    if(move_uploaded_file($_FILES['c']['tmp_name'],getcwd()."\\save\\$c"))
    {
        $ins=mysqli_query($con,"INSERT INTO pro VALUES('$a','$b','$c');");
        ?><p align="center"><?php echo "UPLOADED SUCCESSFULLY";?></p><?php
    }
}
?>