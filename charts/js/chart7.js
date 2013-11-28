$(function () {
	$('#container').highcharts({
		chart: {
			type: 'bar'
		},
		title: {
			text: 'Exportaciones Petroleras y No Petroleras'
		},
		xAxis: {
			categories: ['2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013' ]
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Millones de Dólares'
			}
		},
		legend: {
			backgroundColor: '#FFFFFF',
			reversed: true
		},
		plotOptions: {
			series: {
				stacking: 'normal'
			}
		},
			series: [{
			name: 'Total Petroleras',
			data: [16048.70,13135.60,14758.90,18497.90,23666.60,31890.70,39021.90,43018.29,50655.54,30882.90,41682.33,56427.07,52891.65,33167.80]
		}, {
			name: 'Total No Petroleras',
			data: [150072.10,145644.10,146287.10,146268.50,164332.00,182342.20,210975.40,228857.02,240687.05,198824.57,256678.80,293249.78,317814.14,216758.10]
		}]
	});
});

