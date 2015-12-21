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
<form role="form" class="form-inline" action="home.php"  method="post">

    <select class="form-control"   name="type" style="height:50px">
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
        <input type="text" class="form-control" name="Component" placeholder="Component name" required
               class="form-control">
    </div>


    <div class="form-group">
        <input type="text" class="form-control" name="TDP" placeholder="TDP" required class="form-control">
    </div>


  <div class="form-group">
      <input type="text" class="form-control" name="Info" placeholder="Info" required class="form-control">
  </div>

    <div class="form-group" >
        <input type="number" class="form-control" name="price" placeholder="Price" required class="form-control">
    </div>
    <div class="form-group">
        <input type="hidden" name="action" value="addNewPart">
    </div>

<div class="form-group" >
    <button type="submit" class="btn">Add Part</button>
</div>


</form>
</div>
<div id="showparts">
    <label>Search Parts</label>
    <form role="form" class="form-inline" action="home.php"  method="post">
        <form role="form" class="form-inline" action="home.php"  method="post">

            <select class="form-control"   name="type" style="height:50px">
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
                <input type="text" class="form-control" name="Component" placeholder="Component name ">
            </div>


            <div class="form-group">
                <input type="text" class="form-control" name="TDP" placeholder="TDP">
            </div>


            <div class="form-group">
                <input type="text" class="form-control" name="Info" placeholder="Info">
            </div>

            <div class="form-group" >
                <input type="number" class="form-control" name="price" placeholder="Price"  style="height:50px;" >
            </div>

            <div class="form-group">
                <input type="hidden" name="action" value="displayparts">
            </div>

            <div class="form-group" >
                <button type="submit" class="btn">Search</button>
            </div>

</div>


<?php

include_once("html_footers.php");
?>
