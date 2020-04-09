/* global digital_marketing_liteScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */


jQuery(function($){
 "use strict";
   jQuery('.main-menu-navigation > ul').superfish({
     delay:       500,                            
     animation:   {opacity:'show',height:'show'},  
     speed:       'fast'                        
   });

});

function resMenu_open() {
	document.getElementById("resp-menu").style.width = "250px";
}
function resMenu_close() {
	document.getElementById("resp-menu").style.width = "0";
}
