<?php
//session_start();
//include('includes/config.php');
//
//if(strlen($_SESSION['login'])==0)
//{
//    header('location:signin.php');
//}
//?>

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
<?php include 'includes/partial-header.php';?>

<div class="container pb-5">

    <div class="row pt-4">
        <div class="col-md-6">
            <h1><a href="frontend.php">Go To Frontend</a></h1>
            <a href="frontend.php"><img src="uploads/frontend.png" height="470" width="470"></a>
        </div>

        <div class="col-md-6">
            <h1><a href="backend.php">Go To Backend</a></h1>
            <a href="backend.php"><img src="uploads/backend.png" height="470" width="470"></a>
        </div>

    </div>
</div>

<?php include 'includes/footer.php';?>
<?php include 'includes/scripts.php';?>
</body>
</html>
