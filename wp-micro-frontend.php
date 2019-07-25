<?php
/**
 * Plugin Name: wp-micro-frontend
 */

  function wpmicrofe_shortcodes_init() {  
    add_shortcode('wpmicrofe', function() {
    	wp_enqueue_style('meter-calculator-css', plugins_url('/bristol-water-calculator/build/static/css/main.87f97069.chunk.css', __FILE__));
      wp_enqueue_script('reactAppRuntime', plugins_url('/bristol-water-calculator/build/static/js/runtime~main.a8a9905a.js', __FILE__)); 
      wp_enqueue_script('reactApp', plugins_url('/bristol-water-calculator/build/static/js/2.4b40e7a7.chunk.js', __FILE__));
      wp_enqueue_script('reactAppMain', plugins_url('/bristol-water-calculator/build/static/js/main.474da2e3.chunk.js', __FILE__)); 
      return sprintf("<div id=\"root\"></div>");
    });
  }

  add_action('init', 'wpmicrofe_shortcodes_init');