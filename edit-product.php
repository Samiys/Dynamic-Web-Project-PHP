<?php
session_start();
include('includes/config.php');

if(strlen($_SESSION['login'])==0)
{
    header('location:signin.php');
}
$getId = $_GET['id'];
if(isset($_POST['submit']))
{
    $pname = $_POST['pname'];
    $productname=$_POST['pname'];
    $productimage=$_FILES["pimage"]["name"];
    move_uploaded_file($_FILES["pimage"]["tmp_name"],"uploads/".$_FILES["pimage"]["name"]);

    $sql=mysqli_query($con,"update products set pname='$pname', user_id=1, pimage='$productimage' where id = '$getId'");

    if ($sql > 0 ) {
        $_SESSION['msg'] = "Product Updated Successfully !!";
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

    <title>Edit Product</title>
</head>
<body>
<?php include 'includes/header.php';?>

<?php if(isset($_POST['submit']))
{?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
    </div>
<?php } ?>

<div class="container" style="margin-bottom: 10%">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Product</h1>
        </div>
    </div>

    <br>

    <?php $query=mysqli_query($con,"select * from products where id = '$getId'");
    $row = mysqli_fetch_array($query);
    ?>
    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3 alert alert-info">
                <div class="form-group">
                    <label>Product Name</label>s
                    <input type="text" class="form-control" id="pname" name="pname" value="<?php echo $row['pname'] ?>" required>
                </div>
            </div>

            <div class="col-md-4 alert alert-info">
                <div class="form-group pl-5">
                    <label for="exampleFormControlFile1" class="pl-5">Upload Image</label>
                    <input type="file" class="form-control-file" id="pimage" name="pimage" required>
                </div>
            </div>

            <div class="col-md-4 alert alert-info">
                <img src="uploads/<?php echo htmlentities($row['pimage']);?>" width="200" height="200">
            </div>


        </div>

        <div class="controls">
            <button type="submit" name="submit" class="btn">Update</button>
        </div>

    </form>
</div>

<?php include 'includes/footer.php';?>
<?php include 'includes/scripts.php';?>
</body>
</html>
