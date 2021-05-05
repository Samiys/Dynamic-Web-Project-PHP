<?php
session_start();
include('includes/config.php');

if(strlen($_SESSION['login'])==0)
{
    header('location:signin.php');
}

if(isset($_POST['submit']))
{
    $pname = $_POST['pname'];
    $pimage = $_FILES["pimage"]["name"];

//for getting product id and storing image
    $query=mysqli_query($con,"select max(id) as pid from products");
    $result=mysqli_fetch_array($query);
    $productid = $result['pid']+1;
//    $dir="uploads/$productid";

//    if(!is_dir($dir)){
//        mkdir("uploads/". $productid);
//    }

    move_uploaded_file($_FILES["pimage"]["tmp_name"],"uploads/".$_FILES["pimage"]["name"]);

    $sql=mysqli_query($con,"insert into products(pname,user_id, pimage) values('$pname','".$_SESSION['id']."','$pimage')");

    if ($sql > 0 ) {
        $_SESSION['added'] = "Product Inserted Successfully !!";
        header("location:show-products.php?added='".$_SESSION['added']. "'");
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

    <title>Welcome</title>
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

<div class="container" style="padding-bottom: 80px">
    <div class="row">
        <div class="col-md-12">
            <h1>Add Product</h1>
        </div>
    </div>

    <br>
    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter name" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group pl-5">
                    <label for="exampleFormControlFile1">Upload Image</label>
                    <input type="file" class="form-control-file" id="pimage" name="pimage" accept="image/jpeg, image/jpg" required>
                </div>
            </div>
        </div>

        <div class="controls">
            <button type="submit" name="submit" class="btn btn-primary">Add</button>
        </div>

    </form>
</div>

<?php include 'includes/footer.php';?>
<?php include 'includes/scripts.php';?>
</body>
</html>
<?php //} ?>
