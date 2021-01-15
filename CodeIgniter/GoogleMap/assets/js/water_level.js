var handleBarChart1 = function () {
    "use strict";

    var barChartData = [{
        key: 'Cumulative Return',
        values: [
            { 'label': '1996', 'value': 29, 'color': COLOR_AQUA },
            { 'label': '1997', 'value': 15, 'color': COLOR_AQUA },
            { 'label': '1998', 'value': 32, 'color': COLOR_AQUA },
            { 'label': '1999', 'value': 196, 'color': COLOR_AQUA },
            { 'label': '2000', 'value': 44, 'color': COLOR_AQUA },
            { 'label': '2001', 'value': 98, 'color': COLOR_AQUA },
            { 'label': '2002', 'value': 25, 'color': COLOR_AQUA },
            { 'label': '2003', 'value': 62, 'color': COLOR_AQUA },
            { 'label': '2004', 'value': 53, 'color': COLOR_AQUA },
            { 'label': '2005', 'value': 123, 'color': COLOR_AQUA },
            { 'label': '2006', 'value': 77, 'color': COLOR_AQUA },
            { 'label': '2007', 'value': 29, 'color': COLOR_AQUA },
            { 'label': '2008', 'value': 15, 'color': COLOR_AQUA },
            { 'label': '2009', 'value': 32, 'color': COLOR_AQUA },
            { 'label': '2010', 'value': 196, 'color': COLOR_AQUA },
            { 'label': '2011', 'value': 44, 'color': COLOR_AQUA },
            { 'label': '2012', 'value': 98, 'color': COLOR_AQUA },
            { 'label': '2013', 'value': 25, 'color': COLOR_AQUA },
            { 'label': '2014', 'value': 62, 'color': COLOR_AQUA },
            { 'label': '2015', 'value': 53, 'color': COLOR_AQUA },
            { 'label': '2016', 'value': 123, 'color': COLOR_AQUA },
            { 'label': '2017', 'value': 25, 'color': COLOR_AQUA },
            { 'label': '2018', 'value': 62, 'color': COLOR_AQUA },
            { 'label': '2019', 'value': 53, 'color': COLOR_AQUA },
            { 'label': '2020', 'value': 123, 'color': COLOR_AQUA }
        ]
    }];

    nv.addGraph(function () {
        var barChart = nv.models.discreteBarChart()
            .x(function (d) { return d.label })
            .y(function (d) { return d.value })
            .showValues(true)
            .duration(250);

        barChart.yAxis.axisLabel("Water Level");
        barChart.xAxis.axisLabel('Years');

        d3.select('#nv-bar-chart1').append('svg').datum(barChartData).call(barChart);
        nv.utils.windowResize(barChart.update);

        return barChart;
    });
}

var handleBarChart2 = function () {
    "use strict";

    var barChartData = [{
        key: 'Cumulative Return',
        values: [
            { 'label': '1996', 'value': 29, 'color': COLOR_AQUA },
            { 'label': '1997', 'value': 15, 'color': COLOR_AQUA },
            { 'label': '1998', 'value': 32, 'color': COLOR_AQUA },
            { 'label': '1999', 'value': 196, 'color': COLOR_AQUA },
            { 'label': '2000', 'value': 44, 'color': COLOR_AQUA },
            { 'label': '2001', 'value': 98, 'color': COLOR_AQUA },
            { 'label': '2002', 'value': 25, 'color': COLOR_AQUA },
            { 'label': '2003', 'value': 62, 'color': COLOR_AQUA },
            { 'label': '2004', 'value': 53, 'color': COLOR_AQUA },
            { 'label': '2005', 'value': 123, 'color': COLOR_AQUA },
            { 'label': '2006', 'value': 77, 'color': COLOR_AQUA },
            { 'label': '2007', 'value': 29, 'color': COLOR_AQUA },
            { 'label': '2008', 'value': 15, 'color': COLOR_AQUA },
            { 'label': '2009', 'value': 32, 'color': COLOR_AQUA },
            { 'label': '2010', 'value': 196, 'color': COLOR_AQUA },
            { 'label': '2011', 'value': 44, 'color': COLOR_AQUA },
            { 'label': '2012', 'value': 98, 'color': COLOR_AQUA },
            { 'label': '2013', 'value': 25, 'color': COLOR_AQUA },
            { 'label': '2014', 'value': 62, 'color': COLOR_AQUA },
            { 'label': '2015', 'value': 53, 'color': COLOR_AQUA },
            { 'label': '2016', 'value': 123, 'color': COLOR_AQUA },
            { 'label': '2017', 'value': 25, 'color': COLOR_AQUA },
            { 'label': '2018', 'value': 62, 'color': COLOR_AQUA },
            { 'label': '2019', 'value': 53, 'color': COLOR_AQUA },
            { 'label': '2020', 'value': 123, 'color': COLOR_AQUA }
        ]
    }];

    nv.addGraph(function () {
        var barChart = nv.models.discreteBarChart()
            .x(function (d) { return d.label })
            .y(function (d) { return d.value })
            .showValues(true)
            .duration(250);

        barChart.yAxis.axisLabel("Water Level");
        barChart.xAxis.axisLabel('Years');

        d3.select('#nv-bar-chart2').append('svg').datum(barChartData).call(barChart);
        nv.utils.windowResize(barChart.update);

        return barChart;
    });
}

var handleBarChart3 = function () {
    "use strict";

    var barChartData = [{
        key: 'Cumulative Return',
        values: [
            { 'label': '1996', 'value': 29, 'color': COLOR_AQUA },
            { 'label': '1997', 'value': 15, 'color': COLOR_AQUA },
            { 'label': '1998', 'value': 32, 'color': COLOR_AQUA },
            { 'label': '1999', 'value': 196, 'color': COLOR_AQUA },
            { 'label': '2000', 'value': 44, 'color': COLOR_AQUA },
            { 'label': '2001', 'value': 98, 'color': COLOR_AQUA },
            { 'label': '2002', 'value': 25, 'color': COLOR_AQUA },
            { 'label': '2003', 'value': 62, 'color': COLOR_AQUA },
            { 'label': '2004', 'value': 53, 'color': COLOR_AQUA },
            { 'label': '2005', 'value': 123, 'color': COLOR_AQUA },
            { 'label': '2006', 'value': 77, 'color': COLOR_AQUA },
            { 'label': '2007', 'value': 29, 'color': COLOR_AQUA },
            { 'label': '2008', 'value': 15, 'color': COLOR_AQUA },
            { 'label': '2009', 'value': 32, 'color': COLOR_AQUA },
            { 'label': '2010', 'value': 196, 'color': COLOR_AQUA },
            { 'label': '2011', 'value': 44, 'color': COLOR_AQUA },
            { 'label': '2012', 'value': 98, 'color': COLOR_AQUA },
            { 'label': '2013', 'value': 25, 'color': COLOR_AQUA },
            { 'label': '2014', 'value': 62, 'color': COLOR_AQUA },
            { 'label': '2015', 'value': 53, 'color': COLOR_AQUA },
            { 'label': '2016', 'value': 123, 'color': COLOR_AQUA },
            { 'label': '2017', 'value': 25, 'color': COLOR_AQUA },
            { 'label': '2018', 'value': 62, 'color': COLOR_AQUA },
            { 'label': '2019', 'value': 53, 'color': COLOR_AQUA },
            { 'label': '2020', 'value': 123, 'color': COLOR_AQUA }
        ]
    }];

    nv.addGraph(function () {
        var barChart = nv.models.discreteBarChart()
            .x(function (d) { return d.label })
            .y(function (d) { return d.value })
            .showValues(true)
            .duration(250);

        barChart.yAxis.axisLabel("Water Level");
        barChart.xAxis.axisLabel('Years');

        d3.select('#nv-bar-chart3').append('svg').datum(barChartData).call(barChart);
        nv.utils.windowResize(barChart.update);

        return barChart;
    });
}

var handleBarChart4 = function () {
    "use strict";

    var barChartData = [{
        key: 'Cumulative Return',
        values: [
            { 'label': '1996', 'value': 29, 'color': COLOR_AQUA },
            { 'label': '1997', 'value': 15, 'color': COLOR_AQUA },
            { 'label': '1998', 'value': 32, 'color': COLOR_AQUA },
            { 'label': '1999', 'value': 196, 'color': COLOR_AQUA },
            { 'label': '2000', 'value': 44, 'color': COLOR_AQUA },
            { 'label': '2001', 'value': 98, 'color': COLOR_AQUA },
            { 'label': '2002', 'value': 25, 'color': COLOR_AQUA },
            { 'label': '2003', 'value': 62, 'color': COLOR_AQUA },
            { 'label': '2004', 'value': 53, 'color': COLOR_AQUA },
            { 'label': '2005', 'value': 123, 'color': COLOR_AQUA },
            { 'label': '2006', 'value': 77, 'color': COLOR_AQUA },
            { 'label': '2007', 'value': 29, 'color': COLOR_AQUA },
            { 'label': '2008', 'value': 15, 'color': COLOR_AQUA },
            { 'label': '2009', 'value': 32, 'color': COLOR_AQUA },
            { 'label': '2010', 'value': 196, 'color': COLOR_AQUA },
            { 'label': '2011', 'value': 44, 'color': COLOR_AQUA },
            { 'label': '2012', 'value': 98, 'color': COLOR_AQUA },
            { 'label': '2013', 'value': 25, 'color': COLOR_AQUA },
            { 'label': '2014', 'value': 62, 'color': COLOR_AQUA },
            { 'label': '2015', 'value': 53, 'color': COLOR_AQUA },
            { 'label': '2016', 'value': 123, 'color': COLOR_AQUA },
            { 'label': '2017', 'value': 25, 'color': COLOR_AQUA },
            { 'label': '2018', 'value': 62, 'color': COLOR_AQUA },
            { 'label': '2019', 'value': 53, 'color': COLOR_AQUA },
            { 'label': '2020', 'value': 123, 'color': COLOR_AQUA }
        ]
    }];

    nv.addGraph(function () {
        var barChart = nv.models.discreteBarChart()
            .x(function (d) { return d.label })
            .y(function (d) { return d.value })
            .showValues(true)
            .duration(250);

        barChart.yAxis.axisLabel("Water Level");
        barChart.xAxis.axisLabel('Years');

        d3.select('#nv-bar-chart4').append('svg').datum(barChartData).call(barChart);
        nv.utils.windowResize(barChart.update);

        return barChart;
    });
}


var ChartNvd3 = function () {
    "use strict";
    return {
        //main function
        init: function () {
            handleBarChart1();
            handleBarChart2();
            handleBarChart3();
            handleBarChart4();
        }
    };
}();

$(document).ready(function () {
    ChartNvd3.init();
});