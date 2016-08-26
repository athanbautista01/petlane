<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<!-- FAVICON -->
<link rel="shortcut icon" type="image/x-icon" href="../images/custom/favicon.ico">

<!-- Login JavaScript -->
<script src="../js/login.js"></script>

<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../css/petline.css" rel="stylesheet">

<!-- Font-Awesome Fonts -->
<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- Custom Fonts -->
<link href="../fonts/mont.css" rel="stylesheet" type="text/css">
<link href="../fonts/lato.css" rel="stylesheet" type="text/css">


</head>
<body id="page-top" class="index">

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
                <a class="navbar-brand" href="profile.php"><img class="img-responsive" src="../images/custom/logo2.png" width="130px" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="userPet">&ensp;&ensp;<?php echo $_SESSION['firstName']?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">Profile Account</li>
                                <li><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>
                                <li align="center"><a href="../include/logout.php"><button type="submit" class="btn btn-custom" onclick="" location.href="index.php" ;'>Logout</button></a></li>
                            </ul>
                        </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
