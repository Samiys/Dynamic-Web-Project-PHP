<?php
session_start();
include('includes/config.php');

if(strlen($_SESSION['login'])==0)
{
    header('location:signin.php');
}

if(isset($_GET['del']))
{
    mysqli_query($con,"delete from products where id = '".$_GET['id']."'");
    $_SESSION['delmsg']="Product deleted !!";
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

<?php if(isset($_GET['added']))
{?>
    <div class="alert alert-primary">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo htmlentities($_SESSION['added']);?><?php echo htmlentities($_SESSION['added']="");?>
    </div>
<?php } ?>

<?php if(isset($_GET['del']))
{?>
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
    </div>
<?php } ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>All Products</h1>
        </div>
    </div>
    <br>
    <?php $query=mysqli_query($con,"select * from products");
    $count=1;
    while($row = mysqli_fetch_array($query)) {
        $pid = $row['id'] +1;
        ?>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $row['pname'] ?></td>
                <td>
                    <img src="uploads/<?php echo htmlentities($row['pimage']);?>" width="200" height="200">
                    <!--                    <a href="update-image1.php?id=--><?php //echo $row['id'];?><!--">Change Image</a>-->

                </td>
                <td class="table-actions">
                    <a href="edit-product.php?id=<?php echo $row['id']?>" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                        <i class="far fa-user-edit"></i>
                    </a>
                    <a href="show-products.php?id=<?php echo $row['id']?>&del=delete" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                        <i class="far fa-trash"></i>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>

        <?php
        $count += 1;
    } ?>
</div>

<?php include 'includes/footer.php';?>
<?php include 'includes/scripts.php';?>
</body>
</html>
<?php //} ?>
