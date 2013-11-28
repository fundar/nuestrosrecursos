$(function () {
	$('#container').highcharts({
		chart: {
			type: 'bar'
		},
		title: {
			text: 'Exportaciones Petroleras y No Petroleras'
		},
		xAxis: {
			categories: ['2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013*']
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
			name: 'Total Petroleras',
			data: [9.66,8.27,9.16,11.23,12.59,14.89,15.61,15.82,17.39,13.44,13.97,16.14,14.27,13.27]
		}, {
			name: 'Total No Petroleras',
			data: [90.34,91.73,90.84,88.77,87.41,85.11,84.39,84.18,82.61,86.56,86.03,83.86,85.73,86.72]
		}]
	});
});
    
