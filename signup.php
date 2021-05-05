<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['submit'])) {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $gender=$_POST['gender'];
    $query=mysqli_query($con,"insert into users(name,email,password, gender) values('$name','$email','$password', '$gender')");

    if($query) {
        echo "<script>alert('You are registered successfully');</script>";
        $_SESSION['success'] = "You are registered Successfully !!";
        header("location:signin.php?success='".$_SESSION['success']. "'");
    }
    else {
        echo "<script>alert('Not registered, something went wrong');</script>";
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
    <title>Register</title>
</head>
<body>
<?php include 'includes/partial-header.php';?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
            <div class="row">
                <form method="post" name="register">
                    <div class="col text-center">
                        <h1>Register</h1>
                        <p class="text-h3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
                    </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col mt-4">
                            <input type="text" class="form-control" placeholder="Full Name" name="name" required>
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
                    <div class="row justify-content-start mt-4">
                        <div class="col">
                            <label class="form-check-label" >Gender: </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="gender" value="male">
                                <label class="form-check-label" >Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="gender" value="female">
                                <label class="form-check-label">Female</label>
                            </div>
                            <br>
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
