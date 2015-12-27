<?php

include_once("html_headers.php");
include_once("html_nav_headers.php");

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
</style>
<svg class="chart1" data-bar-chart data-data="23,43,10,13,10,20,30,23,43,10,13,10" data-bar-width="20"></svg>
<svg class="chart2" data-bar-chart data-data="19,65,23,31,32,44,5,32,23,23,54,65" data-bar-width="20"></svg>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://d3js.org/d3.v3.min.js"></script>
<script>
    $('[data-bar-chart]').each(function (i, svg) {
        var $svg = $(svg);
        var data = $svg.data('data').split(',').map(function (datum) {
            return parseFloat(datum);
        });
        var barWidth = parseFloat($svg.data('bar-width')) || 11;
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
                return i * 100;
            })
            .attr("y", function (d, i) {
                return chartHeight - y(d);
            })
            .attr("height", function (d) {
                return y(d);
            });
    });
</script>