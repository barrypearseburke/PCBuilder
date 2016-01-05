
<?php
include_once("html_headers.php");
?>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text">
                    <h1><strong>PC Builder</strong> Registration</h1>
                </div>
                <div class="col-sm-5 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Sign up now</h3>

                            <p>Fill in the form below to get instant access:</p>
                            <?php include ("bademail.php")?>
                        </div>

                        <div class="form-top-right">
                            <i class="fa fa-pencil"></i>

                        </div>

                    </div>

                    <div class="form-bottom">
                        <form role="form" action="register.php" method="post" class="registration-form">

                            <label>First Name</label>
                            <div class="form-group">
                                <label class="sr-only" for="form-first-name">First name</label>
                                <input type="text" name="fname" placeholder="First name..."
                                       class="form-first-name form-control" id="fname" required class="form-control">
                            </div>

                            <label>Last Name</label>
                            <div class="form-group">
                                <label class="sr-only" for="form-last-name">Last name</label>
                                <input type="text" name="lname" placeholder="Last name..."
                                       class="form-last-name form-control" id="lname" required class="form-control">
                            </div>

                            <label>Email</label>
                            <div class="form-group">
                                <label class="sr-only" for="form-email">Email</label>
                                <input type="email" name="email" placeholder="Email..."
                                       class="form-email form-control" id="email" required class="form-control">
                            </div>

                            <label>Password</label>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Password</label>
                                <input type="password" name="password" placeholder="Password..."
                                       class="form-password form-control" id="password" required class="form-control">
                            </div>
                            <button type="submit" class="btn">Sign me up!</button>

                            <div class="form-group">
                                <div class="col-sm-12 col-md-6">
                                    <button type="button" onclick="window.location='index.php'"
                                            style="background-color:#286090" class="btn">Login
                                    </button>
                                </div>
                                <div class="form-group">
                                <input type='hidden' name='action' value='insertUser'>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include_once("html_footers.php");
?>