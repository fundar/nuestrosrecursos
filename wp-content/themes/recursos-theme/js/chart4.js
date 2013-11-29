$(function () {
	$('#chart4').highcharts({
		chart: {
		},
		title: {
			text: 'Precio promedio anual vs precio de referencia del petroleo'
		},
		xAxis: {
			categories: ['2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013']
		},
		yAxis: {
			title: {
				text: 'Dólares'
			}
		},
		series: [{
			type: 'spline',
			name: 'Precio promedio mezcla mexicana',
			data: [24.64,18.57,21.48,24.79,30.94,42.54,53.23,60.79,85.39,54.74,69.67,100.92,102.05],
			marker: {
				lineWidth: 2,
				lineColor: Highcharts.getOptions().colors[3],
				fillColor: 'white'
			}
		}, {
			type: 'spline',
			name: 'Precio referencia',
			data: [16,18,15.5,18.35,20,27,36.50,42.80,49,70,59,65.4,84.9,86],
			marker: {
				lineWidth: 2,
				lineColor: Highcharts.getOptions().colors[3],
				fillColor: 'white'
			}
		}]
	});
});
    
