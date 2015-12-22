<?php
/**
 * Created by PhpStorm.
 * User: Barry and eoin
* Date: 19/12/2015
* Time: 22:32
*/

$partstable = /** @lang html */
    "<center><table border=1>
		<tr>
		    <th>Type</th>
            <th>Name</th>
            <th>TDP</th>
            <th>Info</th>
            <th>Price</th>
            <th>Delete user</th>
		</tr></center>";
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

    // delete form
    $partstable .= "<td>";
    $partstable .= "<center>";
    $partstable .= " <form action='home.php' method='post'>";
    $partstable .= " <input type='submit' class='btn btn-danger btn-xs' value='X'>";
    $partstable .= " <input type='hidden' name='action' value='delete'>";
    $partstable .= " <input type='hidden' name='id' value='$row[id]'>";
    $partstable .= "</center>";
    $partstable .= "</form>";
    $partstable .= "</td>";


    $partstable .= "</tr>";
}
echo $partstable;
?>

<style>
    tr:nth-child(even) {
        background: #ffffff
    }

    tr:nth-child(odd) {
        background: #286090
    }</style>
