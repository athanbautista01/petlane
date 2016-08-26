<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- <title>Pet Lane</title> -->
        <title><?php echo $title; ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="images/custom/favicon.ico">

        <!-- Login JavaScript -->
        <script src="js/login.js"></script>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/petline.css" rel="stylesheet">

        <!-- Font-Awesome Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Custom Fonts -->
        <link href="fonts/mont.css" rel="stylesheet" type="text/css">
        <link href="fonts/lato.css" rel="stylesheet" type="text/css">


    </head>
    <body id="page-top" class="index">
        <?php include_once("analyticstracking.php");?>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index"><img class="img-responsive" src="images/custom/logo2.png" width="130px" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="page-scroll">
                            <div class="style">
                                <form action="search" method="post" role="search">
                                    <?php
                                        include("js/search.php");
                                    ?>
                                </form>
                            </div>
                        </li>
                        <?php
                            
                            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['qtd'] == 3) {
                                $userID = $_SESSION['userid'];
                                $cartCount = "select sum(quantity) as CartCount from orderdetail  where status='InCart' AND UserID=$userID";
                                $result = mysqli_query($conn, $cartCount);
                                if($cartCount != null){
                                    while($row = $result->fetch_assoc()) {
                                    $cart = $row['CartCount'];
                                    }
                                }else{
                                    $cart = 0;
                                }
                                echo "<li class='dropdown'>";
                                echo "  <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false' id='userPet'><div class='sep''>|</div>".$_SESSION['firstName']." <i class='fa fa-shopping-cart fa-lg'></i><span class='cart'>".$cart."</span>&nbsp;<span class='caret'></span></a>";
                                echo "  <ul class='dropdown-menu'>";
                                echo "    <li><a data-toggle='modal' data-target='#myModal'><i class='fa fa-shopping-cart'></i> Cart</a></li>";
                                echo "    <li><a href='account/checkout'><i class='fa fa-check-square-o'></i> Checkout</a></li>";
                                echo "    <li><a href='account/pending'><i class='fa fa-spinner'></i> Orders & Tracking</a></li>";
                            
                                echo "    <li role='separator' class='divider'></li>";
                                echo "    <li class='dropdown-header'>Profile Account</li>";
                                echo "    <li><a href='profile'><i class='fa fa-user'></i> Profile</a></li>";
                                echo "    <li><a href='account/wishlist'><i class='fa fa-heart-o'></i> Wishlist</a></li>";
                                echo "    <li align='center'><a href='include/logout'><button type='submit' class='btn btn-custom' onclick='location.href = 'index.php';'>Logout</button></a></li>";
                                echo "  </ul>";
                                echo "</li>";

                                include("include/cartModal.php");
                            
                            } else {
                                echo "<li class='page-scroll'><a href='register'><div class='sep'>|</div>LOG IN</a></li>";
                            }
                            
                        ?>
                                                    <!-- <li class="page-scroll">
                                                                                                                                <a href="register.php">|&ensp;&ensp;LOG IN</a>
                                                                                                                            </li> -->
                        <li class="page-scroll">
                            <a href="aboutinewvators"><div class="sep">|</div>ABOUT US</a>
                        </li>
                        <li class="page-scroll">
                            <a href="wikipets"><div class="sep">|</div>WIKIPETS</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="page-scroll">
                            <a href="index"><div class="sep">
                                </div><div class="homey1"><i class="fa fa-home fa-2xx"></i></div><div class="homey2">HOME</div></a>
                        </li>
                        <li class="page-scroll">
                            <a href="pets"><div class="sep">|</div>PETS</a>
                        </li>
                        <li class="page-scroll">
                            <a href="shop"><div class="sep">|</div>SHOP</a>
                        </li>
                        <li class="page-scroll">
                            <a href="sellpet"><div class="sep">|</div>SELL PET</a>
                        </li>
                        <li class="page-scroll">
                            <a href="appointment"><div class="sep">|</div>APPOINTMENT</a>
                        </li>
                        <li class="page-scroll">
                            <a href="blog   "><div class="sep">|</div>BLOG</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        