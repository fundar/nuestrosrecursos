$(function () {
	$('#char5').highcharts({
		chart: {
		},
		title: {
			text: 'Balance General de Petróleos Mexicanos'
		},
		colors: [
			'#758ECC', '#CC8175', '#AACE5B'
		],
		xAxis: {
			categories: ['2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013*']
		},
		yAxis: {
			title: {
				text: 'Billones de pesos (Millones de millones de pesos)'
			},
			labels: { 
				formatter: function() {
					return this.value/1000000;
				}
			}
		},
		tooltip: {
			formatter: function() {
				return '<b>'+ this.x +'</b><br/>'+ this.series.name +': '+ (this.y/1000000).toFixed(2);
			}
		},
		series: [{
			type: 'column',
			name: 'Activos',
			data: [563468,556883,697379,845472,947527,1042560,1204734,1330281,1236837,1332037,1392715,1533345,2024183,2001397]
		}, {
			type: 'column',
			name: 'Pasivos',
			data: [412863,434017,596684,799611,914184,1069430,1164781,1280373,1209952,1398877,1506499,1727264,2295249,2325756]
		}, {
			type: 'spline',
			name: 'Patrimonio',
			data: [150605,122866,100695,45861,33343,-26870,39954,49908,26885,-66840,-113783,-193919,-271066,-324360],
			marker: {
				lineWidth: 2,
				lineColor: Highcharts.getOptions().colors[3],
				fillColor: 'white'
			}
		}]
	});
});
    
