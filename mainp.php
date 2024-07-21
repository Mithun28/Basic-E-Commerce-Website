<?php
 $con=mysqli_connect("localhost","root","","weave");
?>
<html>
    <head>
        <title>Main Page
        </title>
        <script src="../assets/js/color-modes.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
          .btn-light,
          .btn-light:hover,
          .btn-light:focus {
            color: #333;
            text-shadow: none; /* Prevent inheritance from `body` */
          }     
          .nav-masthead .nav-link {
            color:  white;
            border-bottom: .25rem solid transparent;
          }

          .nav-masthead .nav-link:hover,
          .nav-masthead .nav-link:focus {
              border-bottom-color:  rgba(239, 205, 205, 0.953);
          }

          .nav-masthead .nav-link + .nav-link {
            margin-left: 1rem;
          }

          .nav-masthead .active {
            color: rgba(239, 205, 205, 0.953);
            border-bottom-color: #2B2A4C;
          }
          #head
          {
            background-color: #2B2A4C;
            width:100%;
            height:60px;
          }
        </style>
    </head>
    <body>

    <div class="container-fluid d-flex w-100 p-3 mx-auto flex-column" id="head" style="vertical-align: middle;">
        <header  class="mb-auto">
          <div>
            <h3 class="float-md-start mb-0" style="color:white;">WEAVE</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
              <a class="nav-link fw-bold py-1 px-0" href="signup.php">REGISTER</a>
              <a class="nav-link fw-bold py-1 px-0" href="logintry.php">LOGIN</a>
            </nav>
          </div>
        </header>
      </div>
      <div class="row align-justify mt-0 mb-0">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2" ></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>

            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="sale1.jpg" alt="SALE" class="d-block" style="width:100%;height:680px;">
                </div>
                <div class="carousel-item">
                    <img src="sale2.png" alt="SALE " class="d-block" style="width:100%;height:680px;">
                </div>
              <div class="carousel-item">
                    <img src="sale3.jpg" alt="SALE" class="d-block" style="width:100%;height:680px">
                </div>
                <div class="carousel-item">
                    <img src="sale4.jpg" alt="SALE" class="d-block" style="width:100%;height:680px">
                </div>
                <div class="carousel-item">
                    <img src="sale5.jpg" alt="SALE" class="d-block" style="width:100%;height:680px">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    <?php 
                $sel=mysqli_query($con,"SELECT * FROM pro;");
                if(mysqli_num_rows($sel)>0)
                {
                while($r=mysqli_fetch_row($sel))
                {
                    ?>
      <div class="col">
        <div class="card card-cover overflow-hidden text-bg-dark rounded-4 shadow-lg">
          <div class="d-flex flex-column p-5 pb-3 text-shadow-1" style="height:450px;width:auto;">
            <a href="logintry.php"><img src="save\\<?php echo $r[2];?>" style="height:200px;width:100%;"></a><br>
                <h1 align="center"><?php echo $r[0]?></h1>
                <h3 align="center">$<?php echo $r[1]?></h3>
          </div>
        </div>
      </div>
      <?php
            }
            }?>
      </div>
    </body>
</html>


            
