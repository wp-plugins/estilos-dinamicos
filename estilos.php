<?php
/*
Plugin Name: Estilos dinamicos
Plugin URI: http://www.estudiodos.es/
Description:Load a different css for each screen resolution. Thanks for the original idea to <a href="http://www.tatuaggiweb.com/">Taguaggi web</a>.
Author: Stephen De Winter
Version: 0.1
Author URI: http://www.estudiodos.es/
*/

add_action('init', estilos_init);
add_action('wp_head', estilos_head);

function estilos_init() {
    wp_enqueue_script('estilos',WP_PLUGIN_URL.'/'.dirname(plugin_basename(__FILE__)).'/estilos.js');
}    

function estilos_head() {
  get_bloginfo();
  //$micss=bloginfo('stylesheet_url');
  echo '<script src="'.WP_PLUGIN_URL.'/'.dirname(plugin_basename(__FILE__)).'/estilos.js" type="text/javascript"></script>
  <script>
   estilos(\'';
   bloginfo('stylesheet_directory');
  echo'\')
</script>
  ';
}
?>
