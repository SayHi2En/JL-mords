<?php
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
    if(!isset($_SESSION["loggedin"])){
        header("location: log-in.php");
        exit;
 }

    require_once('config.php');


?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>animated</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <section>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </section>

</body>
</html>













<!--//<?php

//session_start();
 
// Check if the user is logged in, otherwise redirect to login page
    //if(!isset($_SESSION["loggedin"])){
       // header("location: log-in.php");
      //  exit;
 

    //require_once('config.php');


?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-sm-6">
                <center><h1 class="border border-5">LIST OF CAR BUYERS</h1></center>
                <center><a class="btn btn-success mb-4" href="create.php">BUY NOW</a></center>
                <form method="get" action="">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search by fullname" name="search" value="<?php //echo $search; ?>">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </form>

                <table class="table table-responsive table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fullname</th>
                            <th>Contact #</th>
                            <th>Cars Brands</th>
                            <th>Model</th>
                            <th>Address</th>
                            <th>Date of Purchase</th>
                            <th>Date of Release</th>
                            <th>Update</th>
                            <th>Delete</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            //$sqlquery = "SELECT * FROM cardealler";

                            //if ($results = mysqli_query($conn, $sqlquery)) {
                                //while ($row = mysqli_fetch_array($results)) {
                                    //echo "<tr>";
                                    //echo "<td>".$row['id']."</td>";
                                    //echo "<td>".$row['fullname']."</td>";
                                   // echo "<td>".$row['contact']."</td>";
                                    //echo "<td>".$row['car']."</td>";
                                    //echo "<td>".$row['model']."</td>";
                                    //echo "<td>".$row['address']."</td>";
                                    //echo "<td>".$row['dateofpurchase']."</td>";
                                    //echo "<td>".$row['dateofrelease']."</td>";
                                    //echo "<td><a class='btn btn-primary' href='update.php?id=".$row['id']."'>Update</a></td>";
                                    //echo "<td><a href='delete.php?id=" . $row['id'] . "' class='delete-button'>Delete</a></td>";
                                    //echo "<td><a href='view.php?id=" . $row['id'] . "' class='view-button'>View</a></td>";
                                    //echo "</tr>";
                                
                            
                        ?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-6">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
