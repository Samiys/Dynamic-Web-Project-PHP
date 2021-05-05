<?php
error_reporting(0);
?>
<!-- Header START -->
<header class="bg-light" style="width: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                        <img src="img/logo/logo-2.png" width="45" height="45" class="d-inline-block align-top"
                             alt="">
                    </a>
                    <div class="mr-auto">
                    </div>
                    <div class="social-icons">
                        <span><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></span>
                        <span><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></span>
                        <span><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></span>
                        <span><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></span>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <span class="nav-link" id="home">Home <span class="sr-only">(current)</span></span>
                            </li>
                            <li class="nav-item">
                                <span class="nav-link" onclick="myAbout()">About Us</span>
                            </li>
                            <li class="nav-item">
                                <span class="nav-link" onclick="myProducts()">Products</span>
                            </li>
                            <li class="nav-item">
                                <span class="nav-link" onclick="myContact()">Contact Us</span>
                            </li>
                        </ul>
                        <?php
                        if(strlen($_SESSION['login'])>0)
                        { ?>
                            <ul class="navbar-nav" style="float: right">
                                <li class="nav-item active">
                                    <a class="nav-link" style="float: right"><?php echo $_SESSION['username'] ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="float: right" href="./logout.php">Logout</a>
                                </li>
                            </ul>
                        <?php } ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header END -->
