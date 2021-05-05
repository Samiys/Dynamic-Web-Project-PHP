<?php
session_start();
include('includes/config.php');

if(strlen($_SESSION['login'])==0)
	{
header('location:signin.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'includes/stylesheets.php';?>

    <title>Welcome</title>
</head>
<body>
<?php include 'includes/header.php';?>


<div class="container pb-5">

    <div class="row pt-4">
        <div class="col-md-6">
            <h1><a href="create.php">Add Product</a></h1>
            <a href="create.php"><img src="uploads/add-product-4-837051.png" height="400" width="400"></a>
        </div>
        <div class="col-md-6">
            <h1><a href="show-products.php">View Your Products</a></h1>
            <a href="show-products.php"><img src="uploads/product-135-781070.png" height="400" width="400"></a>
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>
<?php include 'includes/scripts.php';?>
</body>
</html>
<?php //} ?>
