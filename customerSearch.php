<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">BUY SOMTHING</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="account.php">account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">logout</a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container">
        <h2 class="text-center mt-5 mb-5">Customer Search</h2>
        <form class="form-horizontal needs-validation" action="customerSearch.php" method="post">
            <div class="form-group">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="search" placeholder="Enter customer name" name="search"
                        required>
                    <div class="invalid-feedback">
                        Please Enter customer name.
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-warning">Search</button>
                </div>
            </div>
        </form>
    </div>

    <?php
if (isset($_POST['search'])) {
    $cusID=$_POST['search'];
    $serverName="localhost";
    $dbUser="root";
    $dbPassword='';
    $dbName="assi3";
    $con=new mysqli($serverName, $dbUser, $dbPassword, $dbName);
    if ($con->connect_error) {
        die($con->connect_error);
    }

    $queryString="select * FROM `customers`where customerName LIKE '%$cusID' || customerName LIKE '%$cusID%' || customerName LIKE '$cusID%'";

    $dbResult=$con->query($queryString);
    $row=mysqli_fetch_assoc($dbResult);

    if ($row=mysqli_fetch_assoc($dbResult)) {
        echo'
    <div class="container">
        <div class="row">
';
        echo "<table class='table'>
  <thead class='thead-dark'>
    <tr>
      <th scope='col'>Customer number</th>
      <th scope='col'>Customer Name</th>
      <th scope='col'>contact Name</th>
<th scope='col'>phone</th>
<th scope='col'>address</th>
<th scope='col'>country state city</th>

            <th scope='col'>postalCode</th>

    </tr>
  </thead>
  <tbody>";
    }
if(empty($row)){
echo "<h1 class='text-center text-danger m-auto'> '$cusID' not found</h1>
";


}
    while ($row=mysqli_fetch_assoc($dbResult)) {


        echo "
    <tr>
          <td>$row[customerNumber]</td>

      <td>$row[customerName]</td>
      <td>$row[contactFirstName] $row[contactLastName]</td>
            <td>$row[phone]</td>
      <td>$row[addressLine1] / $row[addressLine2]</td>
      <td>$row[country] $row[state] $row[city]</td>
            <td>$row[postalCode]</td>


    </tr>";
    }

    if ($row=mysqli_fetch_assoc($dbResult)) {
        echo "  </tbody>
</table>";
    }
}
?>

    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>