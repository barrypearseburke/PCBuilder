<?php
/**
 * Created by PhpStorm.
 * User: Eoin's
 * Date: 11/12/2015
 * Time: 20:26
 */
?>
<!-- Top menu -->
<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
    <div class="container">
        <div class="navbar-header" id="navleft">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
            </button>
            <a class="navbar-brand">Hello <?php echo $_SESSION['fname']; ?></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="home.php">Parts</a></li>
                <li><a href="analytics.php">Analytics</a></li>
                <li><a href="fileupload.php">FileUpload</a></li>
                <li><a href="logout.php">Logout</a></li>

            </ul>
        </div>
    </div>
</nav>
