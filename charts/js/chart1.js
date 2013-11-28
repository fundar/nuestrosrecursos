$(function () {
	$('#container').highcharts({
		chart: {
			type: 'bar'
		},
		title: {
			text: 'Ingresos petroleros en el sector público presupuestario'
		},
		xAxis: {
			categories: ['2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013*']
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Millones de pesos'
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
			name: 'Ingresos Petroleros**',
			data: [861279.20,880698.20,1054626.20,874163.90,973038.20,1101879.00,1183895.30,580909.50]
		}, {
			name: 'Ingresos No Petroleros',
			data: [1402323.30,1605086.90,1802522.70,1943021.60,1987230.00,2169201.00,2330634.20,1229112.30]
		}]
	});
});

