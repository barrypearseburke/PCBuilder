<?php include_once("html_headers.php"); ?>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>PC Builder</strong> Forgot Password</h1>
                </div>
            </div>
            <div class="form-horizontal">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Reset Yout Password </h3>

                            <p>Enter your username to retrieve your password:</p>
                            <?php include ("bademail.php")?>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-key"></i>
                        </div>
                    </div>
                        <div class="form-bottom">
                        <form role="form" action="forgot_password.php" method="post" class="registration-form">

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
                            <div class="form-group">
                                <input type='hidden' name='action' value='resetpw'>
                            </div>

                            <button type="submit" class="btn">Reset!</button>

                            <div class="form-group">
                                <div class="col-sm-12 col-md-12">
                                    <button type="button" onclick="window.location='index.php'"
                                            style="background-color:#286090" class="btn">Login
                                    </button>
                                </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<?php
include_once("html_footers.php");
?>