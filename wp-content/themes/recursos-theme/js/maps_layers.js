var map = L.mapbox.map('map', 'fundarmexico.map-4jhimt0g', {attributionControl: false, minZoom: 5, maxZoom:11}).setView([24.577, -100.876], 5);

map.scrollWheelZoom.disable();

/*Grupo 1*/
//concesiones
var g1_tileLayer1   = L.mapbox.tileLayer('fundarmexico.lwzy3nmi').addTo(map);
var g1_gridLayer1   = L.mapbox.gridLayer('fundarmexico.lwzy3nmi').addTo(map);
var g1_gridControl1 = L.mapbox.gridControl(g1_gridLayer1, {follow: true}).addTo(map);

//federal
var g1_tileLayer2   = L.mapbox.tileLayer('fundarmexico.fuu40a4i');
var g1_gridLayer2   = L.mapbox.gridLayer('fundarmexico.fuu40a4i');
var g1_gridControl2 = L.mapbox.gridControl(g1_gridLayer2, {follow: true});

//estatal
var g1_tileLayer3   = L.mapbox.tileLayer('fundarmexico.2ittke29');
var g1_gridLayer3   = L.mapbox.gridLayer('fundarmexico.2ittke29');
var g1_gridControl3 = L.mapbox.gridControl(g1_gridLayer3, {follow: true});

//municipal
var g1_tileLayer4   = L.mapbox.tileLayer('fundarmexico.cuxwp14i');
var g1_gridLayer4   = L.mapbox.gridLayer('fundarmexico.cuxwp14i');
var g1_gridControl4 = L.mapbox.gridControl(g1_gridLayer4, {follow: true});

//lenguas
var g1_tileLayer5   = L.mapbox.tileLayer('fundarmexico.ulpfzuxr');
var g1_gridLayer5   = L.mapbox.gridLayer('fundarmexico.ulpfzuxr');
var g1_gridControl5 = L.mapbox.gridControl(g1_gridLayer5, {follow: true});



/*Grupo 2*/
//concesiones
var g2_tileLayer1   = L.mapbox.tileLayer('fundarmexico.lwzy3nmi');
var g2_gridLayer1   = L.mapbox.gridLayer('fundarmexico.lwzy3nmi');
var g2_gridControl1 = L.mapbox.gridControl(g2_gridLayer1, {follow: true});

//federal
var g2_tileLayer2   = L.mapbox.tileLayer('fundarmexico.fuu40a4i').addTo(map);
var g2_gridLayer2   = L.mapbox.gridLayer('fundarmexico.fuu40a4i').addTo(map);
var g2_gridControl2 = L.mapbox.gridControl(g2_gridLayer2, {follow: true}).addTo(map);

//estatal
var g2_tileLayer3   = L.mapbox.tileLayer('fundarmexico.2ittke29');
var g2_gridLayer3   = L.mapbox.gridLayer('fundarmexico.2ittke29');
var g2_gridControl3 = L.mapbox.gridControl(g2_gridLayer3, {follow: true});

//municipal
var g2_tileLayer4   = L.mapbox.tileLayer('fundarmexico.cuxwp14i');
var g2_gridLayer4   = L.mapbox.gridLayer('fundarmexico.cuxwp14i');
var g2_gridControl4 = L.mapbox.gridControl(g2_gridLayer4, {follow: true});

//lenguas
var g2_tileLayer5   = L.mapbox.tileLayer('fundarmexico.ulpfzuxr');
var g2_gridLayer5   = L.mapbox.gridLayer('fundarmexico.ulpfzuxr');
var g2_gridControl5 = L.mapbox.gridControl(g2_gridLayer5, {follow: true});


$(document).ready(function() {
	//********* G1 ********
	$("#g1-layer1").click( function () {
		removeLayersG1();
		
		if(this.className === 'active') {
			map.removeLayer(g1_tileLayer1);
			map.removeLayer(g1_gridLayer1);
			map.removeControl(g1_gridControl1);
			this.className = '';
		} else {
			map.addLayer(g1_tileLayer1);
			map.addLayer(g1_gridLayer1);
			map.addControl(g1_gridControl1);
			this.className = 'active';
		}
		
		map.maxZoom(11);
	});
	
	$("#g1-layer2").click( function () {
		removeLayersG1();
		
		if(this.className === 'active') {
			map.removeLayer(g1_tileLayer2);
			map.removeLayer(g1_gridLayer2);
			map.removeControl(g1_gridControl2);
			this.className = '';
		} else {
			map.addLayer(g1_tileLayer2);
			map.addLayer(g1_gridLayer2);
			map.addControl(g1_gridControl2);
			this.className = 'active';
		}
		
		map.maxZoom(11);
	});
	
	$("#g1-layer3").click( function () {
		removeLayersG1();
		
		if(this.className === 'active') {
			map.removeLayer(g1_tileLayer3);
			map.removeLayer(g1_gridLayer3);
			map.removeControl(g1_gridControl3);
			this.className = '';
		} else {
			map.addLayer(g1_tileLayer3);
			map.addLayer(g1_gridLayer3);
			map.addControl(g1_gridControl3);
			this.className = 'active';
		}
		
		map.maxZoom(11);
	});
	
	$("#g1-layer4").click( function () {
		removeLayersG1();
		
		if(this.className === 'active') {
			map.removeLayer(g1_tileLayer4);
			map.removeLayer(g1_gridLayer4);
			map.removeControl(g1_gridControl4);
			this.className = '';
		} else {
			map.addLayer(g1_tileLayer4);
			map.addLayer(g1_gridLayer4);
			map.addControl(g1_gridControl4);
			this.className = 'active';
		}
		
		map.maxZoom(11);
	});
	
	$("#g1-layer5").click( function () {
		removeLayersG1();
		
		if(this.className === 'active') {
			map.removeLayer(g1_tileLayer5);
			map.removeLayer(g1_gridLayer5);
			map.removeControl(g1_gridControl5);
			this.className = '';
		} else {
			map.addLayer(g1_tileLayer5);
			map.addLayer(g1_gridLayer5);
			map.addControl(g1_gridControl5);
			this.className = 'active';
		}
		
		map.maxZoom(10);
	});
	
	
	//********* G2 ********
	$("#g2-layer1").click( function () {
		removeLayersG2();
		
		if(this.className === 'active') {
			map.removeLayer(g2_tileLayer1);
			map.removeLayer(g2_gridLayer1);
			map.removeControl(g2_gridControl1);
			this.className = '';
		} else {
			map.addLayer(g2_tileLayer1);
			map.addLayer(g2_gridLayer1);
			map.addControl(g2_gridControl1);
			this.className = 'active';
		}
		
		map.maxZoom(11);
	});
	
	$("#g2-layer2").click( function () {
		removeLayersG2();
		
		if(this.className === 'active') {
			map.removeLayer(g2_tileLayer2);
			map.removeLayer(g2_gridLayer2);
			map.removeControl(g2_gridControl2);
			this.className = '';
		} else {
			map.addLayer(g2_tileLayer2);
			map.addLayer(g2_gridLayer2);
			map.addControl(g2_gridControl2);
			this.className = 'active';
		}
		
		map.maxZoom(11);
	});
	
	$("#g2-layer3").click( function () {
		removeLayersG2();
		
		if(this.className === 'active') {
			map.removeLayer(g2_tileLayer3);
			map.removeLayer(g2_gridLayer3);
			map.removeControl(g2_gridControl3);
			this.className = '';
		} else {
			map.addLayer(g2_tileLayer3);
			map.addLayer(g2_gridLayer3);
			map.addControl(g2_gridControl3);
			this.className = 'active';
		}
		
		map.maxZoom(11);
	});
	
	$("#g2-layer4").click( function () {
		removeLayersG2();
		
		if(this.className === 'active') {
			map.removeLayer(g2_tileLayer4);
			map.removeLayer(g2_gridLayer4);
			map.removeControl(g2_gridControl4);
			this.className = '';
		} else {
			map.addLayer(g2_tileLayer4);
			map.addLayer(g2_gridLayer4);
			map.addControl(g2_gridControl4);
			this.className = 'active';
		}
		
		map.maxZoom(11);
	});
	
	$("#g2-layer5").click( function () {
		removeLayersG2();
		
		if(this.className === 'active') {
			map.removeLayer(g2_tileLayer5);
			map.removeLayer(g2_gridLayer5);
			map.removeControl(g2_gridControl5);
			this.className = '';
		} else {
			map.addLayer(g2_tileLayer5);
			map.addLayer(g2_gridLayer5);
			map.addControl(g2_gridControl5);
			this.className = 'active';
		}
		
		map.maxZoom(10);
	});
});

function removeLayersG1() {
	if(map.hasLayer(g1_tileLayer1)) {
		map.removeLayer(g1_tileLayer1);
		map.removeLayer(g1_gridLayer1);
		map.removeControl(g1_gridControl1);
		$("#g1-layer1").removeClass('active');
	}
	
	if(map.hasLayer(g1_tileLayer2)) {
		map.removeLayer(g1_tileLayer2);
		map.removeLayer(g1_gridLayer2);
		map.removeControl(g1_gridControl2);
		$("#g1-layer2").removeClass('active');
	}
	
	if(map.hasLayer(g1_tileLayer3)) {
		map.removeLayer(g1_tileLayer3);
		map.removeLayer(g1_gridLayer3);
		map.removeControl(g1_gridControl3);
		$("#g1-layer3").removeClass('active');
	}
	
	if(map.hasLayer(g1_tileLayer4)) {
		map.removeLayer(g1_tileLayer4);
		map.removeLayer(g1_gridLayer4);
		map.removeControl(g1_gridControl4);
		$("#g1-layer4").removeClass('active');
	}
	
	if(map.hasLayer(g1_tileLayer5)) {
		map.removeLayer(g1_tileLayer5);
		map.removeLayer(g1_gridLayer5);
		map.removeControl(g1_gridControl5);
		$("#g1-layer5").removeClass('active');
	}
}

function removeLayersG2() {
	if(map.hasLayer(g2_tileLayer1)) {
		map.removeLayer(g2_tileLayer1);
		map.removeLayer(g2_gridLayer1);
		map.removeControl(g2_gridControl1);
		$("#g2-layer1").removeClass('active');
	}
	
	if(map.hasLayer(g2_tileLayer2)) {
		map.removeLayer(g2_tileLayer2);
		map.removeLayer(g2_gridLayer2);
		map.removeControl(g2_gridControl2);
		$("#g2-layer2").removeClass('active');
	}
	
	if(map.hasLayer(g2_tileLayer3)) {
		map.removeLayer(g2_tileLayer3);
		map.removeLayer(g2_gridLayer3);
		map.removeControl(g2_gridControl3);
		$("#g2-layer3").removeClass('active');
	}
	
	if(map.hasLayer(g2_tileLayer4)) {
		map.removeLayer(g2_tileLayer4);
		map.removeLayer(g2_gridLayer4);
		map.removeControl(g2_gridControl4);
		$("#g2-layer4").removeClass('active');
	}
	
	if(map.hasLayer(g2_tileLayer5)) {
		map.removeLayer(g2_tileLayer5);
		map.removeLayer(g2_gridLayer5);
		map.removeControl(g2_gridControl5);
		$("#g2-layer5").removeClass('active');
	}
}
