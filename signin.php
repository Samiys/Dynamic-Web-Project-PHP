<?php
session_start();
error_reporting(0);
include('includes/config.php');

//unset($_SESSION);



if(isset($_POST['submit'])) {

    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"SELECT * FROM users WHERE email='$email' and password='$password'");
    $row=mysqli_fetch_array($query);
    
    if($row>0)
    {
        $_SESSION['login']=$_POST['email'];
        $_SESSION['id']=$row['id'];
        $_SESSION['username']=$row['name'];
        header("location:index.php");
        exit();
    }
    else {
        $extra="login.php";
        $email=$_POST['email'];

        if (isset($_SESSION['loginCount']))
        {
            $_SESSION['loginCount']++;
            ?><script>alert(<?php echo $_SESSION['loginCount'] ?>)</script><?php
            if ($_SESSION['loginCount'] > 2)
            {
                echo 'You are Locked!!!';
                exit;
            }
        } else {
            $_SESSION['loginCount'] = 1;
        }

        $_SESSION['errmsg'] = "Invalid email id or Password";
        header("location:signin.php?errmsg='".$_SESSION['errmsg']."'");
        exit();
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'includes/stylesheets.php';?>
    <title>Login</title>
</head>
<body>
<?php include 'includes/partial-header.php';?>

<?php if(isset($_GET['success']))
{?>
    <div class="alert alert-primary">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo htmlentities($_SESSION['success']);?><?php echo htmlentities($_SESSION['success']="");?>
    </div>
<?php } ?>

<?php if(isset($_GET['errmsg']))
{?>
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo htmlentities($_SESSION['errmsg']);?><?php echo htmlentities($_SESSION['errmsg']="");?>
    </div>
<?php } ?>

<?php if(isset($_GET['logout']))
{?>
    <div class="alert alert-primary">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo htmlentities($_SESSION['logout']);?><?php echo htmlentities($_SESSION['logout']="");?>
    </div>
<?php } ?>

<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
            <div class="row pt-5">
                <form method="post" name="register">
                    <div class="col text-center">
                        <h1>Login</h1>
                        <p class="text-h3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
                    </div>
                    </div>
                    <div class="row align-items-center mt-4">
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                        </div>
                    </div>
                    <div class="row align-items-center mt-4">
                        <div class="col">
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                    </div>
        
                    <div class="controls pt-5">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>
<?php include 'includes/scripts.php';?>
</body>
</html>
