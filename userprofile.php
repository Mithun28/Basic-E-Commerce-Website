<?php
if (isset($_GET['s'])) {
    $user = $_GET['s'];
    $con = mysqli_connect("localhost", "root", "", "weave");
    $stmt = $con->prepare("SELECT * FROM users WHERE USERID='$user'");
    $stmt->execute();
    $sel = $stmt->get_result();
}
?>
<?php
if (isset($_GET['edit'])) {
    $userIdToEdit = $_GET['user_id'];
    header("Location: edit_user.php?user_id=$userIdToEdit");
    }
if (isset($_GET['delete'])) {
    $c = $_GET['user_id'];

    $con = mysqli_connect("localhost", "root", "", "weave");

    // Use prepared statement to prevent SQL injection
    $stmt = $con->prepare("DELETE FROM users WHERE USERID = ?");
    $stmt->bind_param("s", $c);
    $stmt->execute();
    $stmt1 = $con->prepare("DROP TABLE ");
    $stmt1->bind_param("s", $c);
    $stmt1->execute();
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
<div class="container-fluid d-flex w-100 p-3 mx-auto flex-column" id="head" style="vertical-align: middle;">
        <header  class="mb-auto">
          <div>
            <h3 class="float-md-start mb-0" style="color:white;">WEAVE</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
              <a class="nav-link fw-bold py-1 px-0" href="userp.php">BACK</a>
            </nav>
          </div>
        </header>
      </div>
    <br>
    <div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6" id="colo">
        <h1 align="center">USER PROFILE</h1>
        <br><br>
            <?php
            if (isset($sel) && mysqli_num_rows($sel) > 0) {
                $r=mysqli_fetch_row($sel);?>

                                <img src="new\<?php echo $r[5]?>" width="250px" height="250px"><br><br><br>
                                <h5>NAME OF THE USER:</h5>
                                <?php echo $r[1]?>
                                <br><br>
                                <h5>USER NAME</h5>
                                <?php echo $r[2]?>
                                <br><br>
                                <h5>EMAIL</h5>
                                <?php echo $r[4]?>
                                <br><br><br>
                                
                                <form method="get" action="userprofile.php">
                                <input type="hidden" name="user_id" value="<?php echo $r[2]; ?>">
                                <button type="submit" class="btn btn-warning" name="edit">Edit</button>
                                <button type="submit" class="btn btn-danger" name="delete" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                </form>
            <?php
            }
            ?>
    </div>
  </div>
    </div>
</body>
</html>