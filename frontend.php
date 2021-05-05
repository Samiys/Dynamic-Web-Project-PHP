<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'includes/stylesheets.php';?>

    <title>Web Project</title>
</head>

<body>

<?php include 'includes/header.php';?>


    <!-- Content START -->
    <div class="body_">
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                <img src="img/carousel/img1.jpg" alt="Laptop" class="carousel_img">
                </div>
        
                <div class="item">
                <img src="img/carousel/img2.jpg" alt="Xbox" class="carousel_img">
                </div>
            
                <div class="item">
                <img src="img/carousel/img3.jpg" alt="Laptop" class="carousel_img">
                </div>
            </div>
        
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <div class="col-12">
                    <h1 class="heading " id="intro_heading">Introduction</h1>
                    <p class="text-justify" id="intro_text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Molestiae fuga animi eius ea voluptatem blanditiis odio 
                                            ut in eligendi odit, autem, aliquid harum? Libero quos, 
                                            veniam eveniet dicta laudantium molestiae. Lorem ipsum dolor
                                            sit amet consectetur adipisicing elit. Aspernatur voluptates
                                            veritatis officia in nam nesciunt ex deserunt earum architecto 
                                            iusto quaerat provident rem delectus, eius reprehenderit error 
                                            minima pariatur possimus reiciendis eaque amet dignissimos? 
                                            Culpa voluptate ducimus in voluptatem possimus.
                    </p>
                </div>
            </div>
            <h1 class="heading" id="product_heading">Latest products</h1><br><br>
            <div class="row"> 
                <div class="col-6 col-md-4">
                    <img id="p1" class="img-fluid products mx-auto d-block img-rounded" src="img/products/Tablet.jpg" alt="Lenovo Tab" onclick="myProductDetails1()">
                    <p class="text-center pHeading" onclick="myProductDetails1()">
                        Lenovo Tab M8 Tablet
                    </p>
                </div>
                <div class="col-6 col-md-4">
                    <img id="p2" class="img-fluid products mx-auto d-block img-rounded" src="img/products/laptop.jpg" alt="Acer Laptop" onclick="myProductDetails2()">
                    <p class="text-center pHeading" onclick="myProductDetails2()">Acer Aspire 5 Slim Laptop
                    </p>
                </div>
                <div class="col-6 col-md-4">
                    <img id="p3" class="img-fluid products mx-auto d-block img-rounded" src="img/products/ps5.jpg" alt="PS5 Console" onclick="myProductDetails3()">
                    <p class="text-center pHeading" onclick="myProductDetails3()">PlayStation 5 Console</p>
                </div>
            </div>
        </div>
      </div>
    <!-- Content END -->

<?php include 'includes/footer.php';?>
<?php include 'includes/scripts.php';?>
</body>

</html>
