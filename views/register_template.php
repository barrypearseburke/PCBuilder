<?php
/**
 * Created by PhpStorm.
 * User: Eoin's
 * Date: 04/12/2015
 * Time: 22:51
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Registration Form Template</title>

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
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="styles/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="styles/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="styles/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="styles/assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>

<!-- Top menu -->
<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
            </button>
            <a class="navbar-brand" href="index.php">Login</a>
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
                <div class="col-sm-7 text">
                    <h1><strong>Pc Builder</strong> Registration</h1>
                </div>
                <div class="col-sm-5 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Sign up now</h3>

                            <p>Fill in the form below to get instant access:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="" method="post" class="registration-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-first-name">First name</label>
                                <input type="text" name="form-first-name" placeholder="First name..."
                                       class="form-first-name form-control" id="form-first-name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-last-name">Last name</label>
                                <input type="text" name="form-last-name" placeholder="Last name..."
                                       class="form-last-name form-control" id="form-last-name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-email">Email</label>
                                <input type="text" name="form-email" placeholder="Email..."
                                       class="form-email form-control" id="form-email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-about-yourself">About yourself</label>
			                        	<textarea name="form-about-yourself" placeholder="About yourself..."
                                                  class="form-about-yourself form-control"
                                                  id="form-about-yourself"></textarea>
                            </div>
                            <button type="submit" class="btn">Sign me up!</button>
                        </form>
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
<script src="styles/assets/js/retina-1.1.0.min.js"></script>
<script src="styles/assets/js/scripts.js"></script>

<!--[if lt IE 10]>
<script src="styles/assets/js/placeholder.js"></script>
<![endif]-->

</body>

</html>