$(function () {
	$('#container').highcharts({
		chart: {
		},
		title: {
			text: 'Estado de Resultados Consolidados de Petróleos Mexicanos (Pemex)'
		},
		xAxis: {
			categories: ['2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013' ]
		},
		yAxis: {
			title: {
				text: 'Millones de pesos'
			}
		},
		series: [{
			type: 'column',
			name: 'Ingresos',
			data: [478688,457385,487358,657893,773587,928643,1062495,1136035,1328950,1089921,1282064,1558429,1646912,789405]
		}, {
			type: 'column',
			name: 'Costos y Gastos de Operación',
			data: [204631,226682,224260,271247,318386.0,429889,481146,648672,667359,636659,676504,877004,741666,410302]
		}, {
			type: 'spline',
			name: 'Rendimiento antes de Impuestos',
			data: [274057,230703,263098,402294.0,459308.0,506112,628107,658948,659625,451971,606678,784532,905246,379103],
			marker: {
				lineWidth: 2,
				lineColor: Highcharts.getOptions().colors[3],
				fillColor: 'white'
			}
		}, {
			type: 'spline',
			name: 'Rendimiento Neto',
			data: [-19710,-34091,-30492,-42754.0,-25496.0,-76282,45252,-18308,-112076,-94662,-47463,-91483,2600,-53385],
			marker: {
				lineWidth: 2,
				lineColor: Highcharts.getOptions().colors[3],
				fillColor: 'white'
			}
		}]
	});
});
    
