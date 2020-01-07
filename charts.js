google.charts.load('current', {'packages':['gauge']});
google.charts.setOnLoadCallback(drawChart);

function drawChart()
{
	var options = {
		min: 10, max: 30,
		width: 400, height: 120,
		redFrom: 22, redTo: 30,
		yellowFrom: 10, yellowTo: 16,
		greenFrom: 16, greenTo: 22,
		minorTicks: 10
	};	
	var input = [['Label', 'Value']];

	$.get('schimmel.json', function (data) {
		$.each(data, function(key, val) {
			input.push([key, val]);
		});
		var data = google.visualization.arrayToDataTable(input);
		var chart = new google.visualization.Gauge(document.getElementById('chart_temp'));
		chart.draw(data, options);

		setInterval(function() {
			$.get('schimmel.json', function (input) {
				var i = 0;
				$.each(input, function(key, val) {
					data.setValue(i, 1, val);
					i++;
				});
				chart.draw(data, options);
			});
		}, 3000);
	});
}
