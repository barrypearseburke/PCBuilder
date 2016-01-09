<?php

include_once("html_headers.php");
include_once("html_nav_headers.php");
include_once("footer.php");

?>
<!DOCTYPE html>
<meta charset="utf-8">


<style>
    .chart1 {
        height: 70px;
        width: 300px;
        border-bottom: 1px solid #ccc;
        display: block;
        margin: 1em;
    }

    .chart1 .bar {
        fill: blue;
    }

    .chart2 {
        height: 70px;
        width: 300px;
        border-bottom: 1px solid #ccc;
        display: block;
        margin: 1em;
    }

    .chart2 .bar {
        fill: red;
    }

    label {
        color: white;
    }
</style>

<center>
    <svg class="chart1" data-bar-chart data-data="20,80" data-bar-width="60"></svg>
    <label>Parts per user</label>
    <svg class="chart2" data-bar-chart data-data="48,52" data-bar-width="80"></svg>
    <label>Average cost per user</label></center>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://d3js.org/d3.v3.min.js"></script>

<script>
    $('[data-bar-chart]').each(function (i, svg) {
        var $svg = $(svg);
        var data = $svg.data('data').split(',').map(function (datum) {
            return parseFloat(datum);
        });
        var barWidth = parseFloat($svg.data('bar-width')) || 1;
        var barSpace = parseFloat($svg.data('bar-space')) || 4;
        var chartHeight = $svg.outerHeight();
        var y = d3.scale.linear()
            .domain([0, d3.max(data)])
            .range([0, chartHeight]);
        d3.select(svg)
            .selectAll("rect")
            .data(data)
            .enter().append("rect")
            .attr("class", "bar")
            .attr("width", barWidth)
            .attr("x", function (d, i) {
                return barWidth * i + barSpace * i;
            })
            .attr("y", chartHeight)
            .attr("height", 0)
            .transition()
            .delay(function (d, i) {
                return i * 40;
            })
            .attr("y", function (d, i) {
                return chartHeight - y(d);
            })
            .attr("height", function (d) {
                return y(d);
            });
    });
</script>

<style>
    .arc text {
        font: 10px sans-serif;
        text-anchor: middle;
    }

    .arc path {
        stroke: #fff;
    }

</style><?php

include_once("html_footers.php");
?>
