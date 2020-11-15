<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="home.php">BUY SOMETHING</a>
            </div>
            <ul class="nav navbar-nav">
                <li class=""><a href="home.php">Home</a></li>
                <li><a href="logout.php">logout</a></li>
                <li><a href="products.php">ALLproducts</a></li>
            </ul>
        </div>
    </nav>


    <div class="container">

        <h2 class="text-center mt-5 mb-5">account information</h2>
        <form class="form-horizontal" action="validate_info.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="user">User name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="user" placeholder="Enter name" name="userName">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="phone">phone:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="fcurl">facebook account :</label>
                <div class="col-sm-10">
                    <input type="url" class="form-control" id="fcurl" placeholder="Enter url" name="fcurl">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="insurl">instagram account:</label>
                <div class="col-sm-10">
                    <input type="url" class="form-control" id="insurl" placeholder="Enter url" name="insurl">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="twurl">twitter account:</label>
                <div class="col-sm-10">
                    <input type="url" class="form-control" id="twurl" placeholder="Enter url" name="twurl">
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>