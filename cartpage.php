<?php
if (isset($_GET['s'])) {
    $cartTableName = $_GET['s'];
    $con = mysqli_connect("localhost", "root", "", "weave");

    // Use prepared statement to prevent SQL injection
    $stmt = $con->prepare("SELECT * FROM $cartTableName");
    $stmt->execute();
    $sel = $stmt->get_result();
}
?>

<?php
if (isset($_GET['s']) && isset($_GET['delete_item'])) {
    $cartTableName = $_GET['s'];
    $itemToDelete = $_GET['delete_item'];

    $con = mysqli_connect("localhost", "root", "", "weave");

    // Use prepared statement to prevent SQL injection
    $stmt = $con->prepare("DELETE FROM $cartTableName WHERE P_Name = ?");
    $stmt->bind_param("s", $itemToDelete);
    $stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CART DETAILS</title>
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
              <a class="nav-link fw-bold py-1 px-0" href="userp.php">BACK</a>
            </nav>
          </div>
        </header>
      </div>
    <br>
    <div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6" id="colo">
        <h1 align="center">CART DETAILS</h1>
        <br><br>
        <?php
            if (isset($sel) && mysqli_num_rows($sel) > 0) {
                $counter = 1;
                while ($r = mysqli_fetch_row($sel)) {
            ?>
        <table class="table table-hover">
            <tr>
                <th>Sl No</th>
                <th>NAME</th>
                <th>PRICE</th>
                <th>PHOTO</th>
                <th>MORE</th>
            </tr>
            
                    <tr>
                        <td><?php echo $counter++; ?></td>
                        <td><?php echo $r[1]; ?></td>
                        <td><?php echo $r[2]; ?></td>
                        <td><img src="<?php echo $r[3]; ?>" width="100px" height="100px"></td>
                        <td>
                            <form method="get" action="cartpage.php">
                                <input type="hidden" name="s" value="<?php echo $cartTableName; ?>">
                                <input type="hidden" name="delete_item" value="<?php echo $r[1]; ?>">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">CANCEL</button>
                            </form>
                        </td>
                    </tr>
            <?php
                }
                
            }
            else{
                echo "No items in the cart.";
            }
            ?>
        </table>
    </div>
  </div>
        </div>
</body>
</html>
