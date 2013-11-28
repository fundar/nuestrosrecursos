$(function () {
	$('#container').highcharts({
		chart: {
			type: 'column'
		},
		title: {
			text: 'Evolución del Fondo de Estabilización de los Ingresos petroleros IV trimestre'
		},
		subtitle: {
			text: 'Source: <a href="http://fundar.org.mx/nuestros-recursos" title="Base de datos Ingresos Petroleros" target="_blank">Base de datos</a>'
		},
		xAxis: {
			categories: ['2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013*']
		},
		yAxis: {
			title: {
				text: 'Millones de pesos'
			}
		},
		plotOptions: {
			column: {
				pointPadding: 0.2,
				borderWidth: 0
			}
		},
		series: [{
			name: 'Total Acumulado',
			data: [9133,8052,74,6276,11608,16227,34645,55818,56168,24056,17206,8046,13620,27291]

		}, {
			name: 'Rendimientos',
			data: [0,192,2,78,114,86,224,617,26189,4229,2556,6034,18147,14180]

		}, {
			name: 'Erogaciones',
			data: [0,-1106,0,0,-2201,5115,5691,0,0,154893,10293,14421,11729.0,0.2]

		}]
	});
});

