<?php
/**
 * Created by PhpStorm.
 * User: Barry and eoin
* Date: 19/12/2015
* Time: 22:32
*/

$partstable = /** @lang html */
    "<table class=\"table\">

<thead>

        <tr>

            <th>Type</th>

            <th>Name</th>


            <th>TDP</th>

            <th>Info</th>

             <th>Price</th>

        </tr>

    </thead>";
foreach ( $this->model->partsList as $parts => $row )
{
    $partstable .= "<tr>";

    $partstable .= "<td>";
    $partstable .= $row["type"];
    $partstable .= "</td>";

    $partstable .= "<td>";
    $partstable .= $row["componentname"];
    $partstable .= "</td>";

    $partstable .= "<td>";
    $partstable .= $row["tdp"];
    $partstable .= "</td>";

    $partstable .= "<td>";
    $partstable .= $row["info"];
    $partstable .= "</td>";

    $partstable .= "<td>";
    $partstable .= $row["price"];
    $partstable .= "</td>";


    $partstable .= "</tr>";
}
echo $partstable;
?>