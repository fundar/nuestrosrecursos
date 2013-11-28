$(function () {
	$('#container').highcharts({
		chart: {
			type: 'column'
		},
		title: {
			text: 'Ingresos petroleros en el sector público presupuestario'
		},
		xAxis: {
			categories: ['2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013']
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Millones de pesos'
			},
			stackLabels: {
				enabled: true,
				style: {
					fontWeight: 'bold',
					color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
				}
			}
		},
		legend: {
			align: 'right',
			x: -70,
			verticalAlign: 'top',
			y: 20,
			floating: true,
			backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColorSolid) || 'white',
			borderColor: '#CCC',
			borderWidth: 1,
			shadow: false
		},
		tooltip: {
			formatter: function() {
				//return '<b>'+ this.x +'</b><br/>'+ this.series.name +': '+ this.y +'<br/>'+ 'Total: '+ this.point.stackTotal;
				return '<b>'+ this.x +'</b><br/>'+ this.series.name +': '+ this.y;
			}
		},
		plotOptions: {
			column: {
				stacking: 'normal',
				dataLabels: {
					enabled: true,
					color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
				}
			}
		},
		series: [{
			name: 'Organismos y Empresas',
			data: [723831.60,793638.90,810990.10,816737.40,836207.70,1327047.50,1380188.10,488482.20]
		}, {
			name: 'Ingresos Petroleros',
			data: [861279.2,880698.20,1054626.20,874163.90,973038.20,1101879.00,1183895.30,580909.50]
		}
		]
	});
});
   
    
