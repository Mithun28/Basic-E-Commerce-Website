<?php
$con=mysqli_connect("localhost","root","","weave");
$sel=mysqli_query($con,"SELECT * FROM pro;");?>
<?php
                    if(isset($_GET['s']))
                    {
                        $a=$_GET['s'];
                        $con=mysqli_connect("localhost","root","","weave");
                        $del=mysqli_query($con,"DELETE FROM pro WHERE PRO='$a'");
                    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PRODUCT DETAILS</title>
    <script src="../assets/js/color-modes.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #2B2A4C;
        }
        a {
            color: white;
            text-decoration: none;
        }
        #colo {
            width: 75%;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
            background-color: whitesmoke;
            border-radius: 24px;
        }
    </style>
</head>
    <body>
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
        <br>
        <div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6" id="colo">
            <h1 align="center">PRODUCT DETAILS</h1>
            <br><br>
            <table class="table table-hover">
                <tr>
                    <th>NAME</th>
                    <th>PRICE</th>
                    <th>PHOTO</th>
                    <th>MORE</th>
                </tr>
                <?php
                if(mysqli_num_rows($sel)>0)
                {
                    while($r=mysqli_fetch_row($sel))
                    {?>
                <tr>
                    <td><?php        echo $r[0]; ?></td>
                    <td><?php        echo $r[1]; ?></td>
                    <td><img src="save\\<?php  echo $r[2]?>" width="100px" height="100px"></td>
                    <td><button class="btn btn-danger"><a href="pro_details.php ?s=<?php echo $r[0]?>">Delete</a></button></td>
                </tr>
                <?php
}}
?>
            </table>
        </div></div></div>
    </body>
</html>

