$(function () {
	$('#chart7').highcharts({
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
				text: 'Miles de Millones de Dólares'
			},
			labels: { 
				formatter: function() {
					return this.value/1000;
				}
			}
		},
		legend: {
			backgroundColor: '#FFFFFF',
			reversed: true
		},
		tooltip: {
			formatter: function() {
				return '<b>'+ this.x +'</b><br/>'+ this.series.name +': '+ (this.y/1000).toFixed(2);
			}
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
			name: 'Agropecuarias',
			data: [4217.20,3902.70,3866.30,4664.40,5683.90,6008.30,6852.70,7435.27,7916.10,7797.63,8510.09,10560.15,75436.03,7752.90]
		}, {
			name: 'Extractivas',
			data: [520.70,388.50,389.30,517.00,900.80,1167.70,1316.80,1737.10,1930.99,1447.87,2423.98,4063.46,4906.46,3057.50]
		}, {
			name: 'Manufactureras',
			data: [145334.20,141353.00,142031.40,141087.10,157747.30,175166.20,202805.80,219684.66,230839.97,189579.06,245744.80,278626.18,301993.44,205947.90]
		}]
	});
});

