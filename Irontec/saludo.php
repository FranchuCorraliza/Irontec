<?php
/*Plugin Name: saludo
	Plugin URI: Irontec
	Description: Sencillo plugin
	Version: 0.1
	Author: Francisco Corraliza*/	
function saludo(){
	include('template/saludo.html');		
}
function saludo_instala(){

}
function saludo_desinstala(){

}	
function saludo_panel(){
	include('template/panel.html');			
}
function saludo_add_menu(){	
	if (function_exists('add_options_page')) {
		//add_menu_page
		add_options_page('saludo', 'saludo', 8, basename(__FILE__), 'saludo_panel');
	}
}
if (function_exists('add_action')) {
	add_action('admin_menu', 'saludo_add_menu'); 
}
add_action('activate_saludo/saludo.php','saludo_instala');
add_action('deactivate_saludo/saludo.php', 'saludo_desinstala');
?>