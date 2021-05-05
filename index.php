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
        <div class="col-md-3">
            <h1><a href="backend.php">Go To Backend</a></h1>
        </div>
        <div class="col-md-3">
            <h1><a href="frontend.php">Go To Frontend</a></h1>
        </div>
    </div>
    <img src="uploads/1590690600-front-end-back-end-1080x608.png" height="350" width="600">
</div>

<?php include 'includes/footer.php';?>
<?php include 'includes/scripts.php';?>
</body>
</html>
