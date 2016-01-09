<?php  include_once("html_headers.php");
include_once("html_nav_headers.php");
?>




<div class="top-content">

    <div class="inner-bg">
        <div class="container">

            <div class="form-horizontal">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">

                            <p>Select a file to upload:</p>
                            <?php include ("bademail.php")?>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-key"></i>
                        </div>
                    </div>


                    <div class="form-bottom">
                        <form form action="fileupload.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="sr-only" for="file">File</label>
                                <input type="file" name="fileToUpload" id="fileToUpload">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="upload">upload</label>
                                <input type="hidden" name="action" value="upload">
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="action" value="upload">
                            </div>


                            <div class="form-group">
                                <input type="submit" value="Upload File" name="submit">
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
