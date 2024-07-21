<?php
$con=mysqli_connect("localhost","root","","weave");
$sel=mysqli_query($con,"SELECT * FROM users;");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ORDER DETAILS</title>
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
            <h1 align="center">ORDER DETAILS</h1>
            <br><br>
            <table class="table table-hover">
                <tr>
                    <th>Name</th>
                    <th>UserId</th>
                    <th>Purchases Done</th>
                </tr>
                <?php
                if(mysqli_num_rows($sel)>0)
                {
                    while($r=mysqli_fetch_row($sel))
                    {
                        if($r[0]!=1000)
                        {
                            ?>
                <tr>
                    <td><?php        echo $r[1]."<br>"; ?></td>
                    <td><?php        echo $r[2]."<br>"; ?></td>
                    <td><?php        
                    $sel1=mysqli_query($con,"SELECT * FROM $r[2]");
                    if(mysqli_num_rows($sel1)>0)
                {
                    while($r1=mysqli_fetch_row($sel1))
                    {?>
                        <table class="table table-hover">
                        <tr>
                            <th>NAME</th>
                            <th>PRICE</th>
                            <th>PHOTO</th>
                        </tr>
                        
                                <tr>
                                    <td><?php echo $r1[1]; ?></td>
                                    <td><?php echo $r1[2]; ?></td>
                                    <td><img src="<?php echo $r1[3]; ?>" width="50px" height="50px"></td>
                                    
                                </tr>
                        </table>
                    <?php }}
                    else
                    {
                        echo "No Purchase Yet";
                    }?></td>
                </tr>
                <?php }}}?>
                
            </table>
        </div>
  </div>
        </div>
    </body>
</html>