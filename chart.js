google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {

// Create the data table.
var data = new google.visualization.DataTable();
data.addColumn('string', 'Topping');
data.addColumn('number', 'Slices');
data.addRows([
['PC', 25],
['SERVERS', 26],
['ACCESSORIES', 153],
['MOBILE DEVICE', 3],
['SMART HOME', 1],
['Office', 62]
]);

// Set chart options
var options = {'title':'',
           'width':400,
           'height':300};

// Instantiate and draw our chart, passing in some options.
var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
chart.draw(data, options);
}