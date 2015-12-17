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
    <label> Add a new part</label>
<form class="form-inline"">

    <select class="form-control" style="height:50px ">
        <option>CPU</option>
        <option>PSU</option>
        <option>RAM</option>
        <option>Case</option>
        <option>Storage</option>
        <option>Software</option>
        <option>Motherboard</option>
        <option>External Drive</option>
        <option>Graphics Card</option>
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
        <input type="number" class="form-control" id="price" placeholder="Price">
    </div>

<div class="form-group">
    <button type="submit" class="btn">Add Part</button>
</div>

</form>
</div>


<?php

include_once("html_footers.php");
?>
