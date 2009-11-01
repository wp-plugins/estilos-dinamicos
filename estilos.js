function estilos(urltxt) {
if(window.screen) {
	   var estilo;
	   var ancho= screen.width;
	   
	   estilo = '1600.css';
	   if (ancho <= 1400) { estilo = '1400.css'; }
	   if (ancho <= 1280) { estilo = '1280.css'; }
	   if (ancho <= 1152) { estilo = '1152.css'; }
	   if (ancho <= 1024) { estilo = '1024.css'; }
	   if (ancho <= 800) { estilo = '800.css'; }
	   
	   document.write('<link href="'+urltxt+'/'+estilo+'" rel="stylesheet" type="text/css" />');
	}
}
