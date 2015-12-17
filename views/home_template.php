<?php
/**
 * Created by PhpStorm.
 * User: Barry and Eoin
 * Date: 10/12/2015
 * Time: 23:24
 */
include_once("html_headers.php");
include_once("html_nav_headers.php");

?>
<div id ="addnewpart">
<label> Hello eoin , its your best friend</label>
<form class="form-inline"">

    <select class="form-control" style="height:50px ">
        <option>CPU</option>
        <option>Stroage</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>


    <div class="form-group">
        <input type="text" class="form-control" id="Component " placeholder="Component name ">
    </div>


    <div class="form-group">
        <input type="text" class="form-control" id="TDP" placeholder="TDP">
    </div>


  <div class="form-group">
    <input type="text" class="form-control" id="Info" placeholder="Info">
  </div>

    <div class="form-group">
        <input type="NUMBER" class="form-control" id="price" placeholder="price">
    </div>

<div class="form-group">
    <button type="submit" class="btn">Add Part</button>
</div>

</form>
</div>






<?php

include_once("html_footers.php");
?>
