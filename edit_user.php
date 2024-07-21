<?php
if (isset($_GET['user_id'])) {
    $user = $_GET['user_id'];
    $con = mysqli_connect("localhost", "root", "", "weave");
    $sel=mysqli_query($con,"SELECT * FROM users WHERE USERID='$user'");
    
}
if(isset($_POST['edit']))
{
    $con = mysqli_connect("localhost", "root", "", "weave");
    $us=$_POST['us'];
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $d=$_POST['d'];
    $e=$_POST['e'];
    if($d==$e)
    {
        $f=$_FILES['f']['name'];
        if(move_uploaded_file($_FILES['f']['tmp_name'],getcwd()."\\new\\$f"))
        {
            $upd=mysqli_query($con,"UPDATE users SET NAME='$a',USERID='$b',EMAIL='$c',PASSWRD='$d',FILE='$f' WHERE USERID='$us' ;");
            header("Location: userprofile.php ?s=$b");
        }
        
    }
    
}
?>
<html>
<head>
    <title>USER PROFILE</title>
    <script src="../assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        #colo {
            width: 75%;
            height: 100%;
            background-color: whitesmoke;
            border-radius: 24px;
            margin: 0 auto; /* Center the div horizontally */
        text-align: center; /* Center inline or inline-block elements horizontally */
        padding: 20px;
        }

        body {
            background-color: #2B2A4C;
        }

        a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <br>
    <div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6" id="colo">
        <h1 align="center">USER PROFILE</h1>
        <br><br>
            <?php
            
            if (mysqli_num_rows($sel) > 0) {
                $r=mysqli_fetch_row($sel);?>
                    <form method="post" action="edit_user.php" enctype="multipart/form-data">
                                <img src="new\<?php echo $r[5]?>" width="250px" height="250px"><br><br><br>
                                <input type="hidden" value="<?php echo $r[2]?>" name="us">
                                <p>NAME:</p><input type="text" value="<?php echo $r[1]?>" name="a"></input>
                                <p>USERID:</p><input type="text" value="<?php echo $r[2]?>" name="b"></input>
                                <p>EMAIL:</p><input type="email" value="<?php echo $r[4]?>" name="c"></input>
                                <p>PASSWORD:</p><input type="password" value="<?php echo $r[3]?>" name="d"></input>
                                <p>CONFIRM PASSWORD:</p><input type="password" value="<?php echo $r[3]?>" name="e"></input>
                                <p>PROFILE PROFILE</p><input type="file" name="f">
                                <button type="submit" class="btn btn-warning" name="edit">Edit</button>
                    </form>
            <?php
            }
            ?>
    </div>
  </div>
    </div>
</body>
</html>