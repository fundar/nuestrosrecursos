$(function () {
	var counter = 1;
	
	$('#next').click( function() {
		if(counter==8) {
			counter=1;
		} else {
			counter+=1;
		}
		
		$('.charts').hide();
		$('#chart_' + counter).show().fadeIn();
	});
	
	$('#prev').click( function() {
		if(counter==1) {
			counter=8;
		} else {
			counter-=1;
		}
		
		$('.charts').hide();
		$('#chart_' + counter).show().fadeIn();
	});
		
	$('#estados-atlas').change( function() {
		if(estados[$(this).val()] != undefined) {
			var html = "";
			$("#altas-section").html("");
			
			estados[$(this).val()].forEach(function(entry) {
				html += '<a href="'+template_url+'/atlas/big/'+entry.image+'.jpg" title="'+entry.title+'" class="thumb-single">';
					html += '<img src="'+template_url+'/atlas/thumb/'+entry.image+'.jpg" alt="'+entry.title+'" class="image-thumb"/>';
				html += '</a>';
			});
			
			$("#altas-section").html(html);
		}
	});
	
	var estados = {
		"nacional" : new Array(
			{ "image" : "ANP-y-concesiones", title : "ANP y concesiones"},
			{ "image" : "Concesiones-Carbon-Mineral", title : "Concesiones Carbón Mineral"},
			{ "image" : "Concesiones-Cobre", title : "Concesiones Cobre"},
			{ "image" : "Concesiones-Hierro", title : "Concesiones Hierro"},
			{ "image" : "Concesiones-Manganeso", title : "Concesiones Manganeso"},
			{ "image" : "Concesiones-Oro", title : "Concesiones Oro"},
			{ "image" : "Concesiones-Plata", title : "Concesiones Plata"},
			{ "image" : "Concesiones-Plomo", title : "Concesiones Plomo"},
			{ "image" : "Concesiones-Zinc", title : "Concesiones Zinc"},
			{ "image" : "Ecorregiones-y-concesiones", title : "Ecorregiones y concesiones"},
			{ "image" : "Ramsar-y-concesiones", title : "Ramsar y concesiones"},
			{ "image" : "Regiones-Hidrologicas-y-concesiones", title : "Regiones Hidrológicas y concesiones"},
			{ "image" : "Rios-principales-y-concesiones", title : "Ríos principales y concesiones"},
			{ "image" : "Sitios-prioritarios-conservacion-y-concesiones", title : "Sitios prioritarios conservación y concesiones"}
		),
		"aguascalientes" : new Array(
			{ "image" : "Aguascalientes-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Aguascalientes-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"baja-california" : new Array(
			{ "image" : "Baja-California-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Baja-California-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"baja-california-sur" : new Array(
			{ "image" : "Baja-California-Sur-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Baja-California-Sur-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"campeche" : new Array(
			{ "image" : "Campeche-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Campeche-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"chiapas" : new Array(
			{ "image" : "Chiapas-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Chiapas-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"chihuahua" : new Array(
			{ "image" : "Chihuahua-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Chihuahua-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"coahuila" : new Array(
			{ "image" : "Coahuila-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Coahuila-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"colima" : new Array(
			{ "image" : "Colima-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Colima-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"durango" : new Array(
			{ "image" : "Durango-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Durango-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"estado-de-mexico" : new Array(
			{ "image" : "Estado-de-Mexico-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Estado-de-Mexico-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"guanajuato" : new Array(
			{ "image" : "Guanajuato-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Guanajuato-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"guerrero" : new Array(
			{ "image" : "Guerrero-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Guerrero-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"hidalgo" : new Array(
			{ "image" : "Hidalgo-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Hidalgo-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"jalisco" : new Array(
			{ "image" : "Jalisco-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Jalisco-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"michoacan" : new Array(
			{ "image" : "Michoacan-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Michoacan-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"morelos" : new Array(
			{ "image" : "Morelos-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Morelos-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"nayarit" : new Array(
			{ "image" : "Nayarit-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Nayarit-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"nuevo-leon" : new Array(
			{ "image" : "Nuevo-Leon-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Nuevo-Leon-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"oaxaca" : new Array(
			{ "image" : "Oaxaca-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Oaxaca-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"puebla" : new Array(
			{ "image" : "Puebla-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Puebla-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"queretaro" : new Array(
			{ "image" : "Queretaro-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Queretaro-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"san-luis-potosi" : new Array(
			{ "image" : "San-Luis-Potosi-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "San-Luis-Potosi-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"sinaloa" : new Array(
			{ "image" : "Sinaloa-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Sinaloa-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"sonora" : new Array(
			{ "image" : "Sonora-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Sonora-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"rabasco" : new Array(
			{ "image" : "Tabasco-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Tabasco-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"tamaulipas" : new Array(
			{ "image" : "Tamaulipas-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Tamaulipas-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"tlaxcala" : new Array(
			{ "image" : "Tlaxcala-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Tlaxcala-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"veracruz" : new Array(
			{ "image" : "Veracruz-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Veracruz-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"yucatan" : new Array(
			{ "image" : "Yucatan-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Yucatan-Nucleos-agrarios", title : "Núcleos agrarios"}
		),
		"zacatecas" : new Array(
			{ "image" : "Zacatecas-ANP-y-Lenguas-indigenas", title : "ANP y Lenguas indígenas"},
			{ "image" : "Zacatecas-Nucleos-agrarios", title : "Núcleos agrarios"}
		)
	};
	
	/*Only on load*/
	var html = "";
		
	estados["nacional"].forEach(function(entry) {
		html += '<a href="'+template_url+'/atlas/big/'+entry.image+'.jpg" title="'+entry.title+'" class="thumb-single">';
			html += '<img src="'+template_url+'/atlas/thumb/'+entry.image+'.jpg" alt="'+entry.title+'" class="image-thumb"/>';
		html += '</a>';
	});
	
	$("#altas-section").html(html);
	/*Only on load*/
});
