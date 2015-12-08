<?php
/**
 * Created by PhpStorm.
 * User: Eoin's
 * Date: 04/12/2015
 * Time: 15:47
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PC Builder</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="styles/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/assets/css/form-elements.css">
    <link rel="stylesheet" href="styles/assets/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="../styles/assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="../styles/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="../styles/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../styles/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../styles/assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>

<!-- Top menu -->
<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="top-navbar-1">
            <ul class="nav navbar-nav navbar-right">
            </ul>
        </div>
    </div>
</nav>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>PC Builder</strong> Login</h1>
                </div>
            </div>
            <div class="form-horizontal">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Login to our site</h3>

                            <p>Enter your username and password to log on:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-key"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="" method="post" class="login-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-username">Username</label>
                                <input type="text" name="form-username" placeholder="Username..."
                                       class="form-username form-control" id="form-username">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Password</label>
                                <input type="password" name="form-password" placeholder="Password..."
                                       class="form-password form-control" id="form-password">
                            </div>
                            <div class="form-group">
                            <button type="submit" class="btn">Sign in!</button>
                            </div>
                            <div class="form-group">
                                <div class = "col-sm-12 col-md-6" >
                                    <button type="button" onclick="window.location='../register.php'"
                                            style="background-color:Blue" class="btn">Register
                                    </button>
                                    <!-- todo ,change button color to something that dosen't make eyes bleed -->
                                    </div>

                                <div class = "col-sm-12 col-md-6" >
                                <button  type="button" style="background-color:Red" class="btn"  >Forgot Password</button>
                                </div></div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</div>

<!-- Javascript -->
<script src="styles/assets/js/jquery-1.11.1.min.js"></script>
<script src="styles/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="styles/assets/js/jquery.backstretch.min.js"></script>
<script src="styles/assets/js/scripts.js"></script>

<!--[if lt IE 10]>
<script src="styles/assets/js/placeholder.js"></script>
<![endif]-->

</body>

</html>