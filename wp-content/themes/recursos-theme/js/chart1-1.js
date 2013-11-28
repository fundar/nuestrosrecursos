$(function () {
	$('#container').highcharts({
		chart: {
			type: 'bar'
		},
		title: {
			text: 'Ingresos petroleros y no petroleros'
		},
		xAxis: {
			categories: ['2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013*']
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Porcentaje'
			}
		},
		tooltip: {
			formatter: function() {
				return '<b>'+ this.x +'</b><br/>'+ this.series.name +': '+ this.y + '%';
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
			name: 'Ingresos Petroleros*',
			data: [38.05,35.43,36.91,31.03,32.87,33.69,33.69,32.09]
		}, {
			name: 'Ingresos No Petroleros',
			data: [61.95,64.57,63.09,68.97,67.13,66.31,66.31,67.91]
		}]
	});
});
    
