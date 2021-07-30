<?php
  /**
   * Plugin Name: Color Swatch
   * Author: Pamela Sillah
   * Version: 1.0.0
   */

  function colorStyles() {
    wp_enqueue_style('colcss', plugins_url( '/colors.css' , __FILE__ ));
    wp_enqueue_script('coljs', plugins_url( '/colors.js', __FILE__) , null, '', true);
    wp_enqueue_script('chromajs', plugins_url('/chroma.js', __FILE__) , null, '', true);
  }
  add_action( 'wp_enqueue_scripts', 'colorStyles' );


  function colorSwatch() { ?>
      <div class="base-colors">
        <span class="base-color" style="background-color: #dbdbcc" id="neutral"></span>
        <span class="base-color" style="background-color: #e4032f"  id="red"></span>
        <span class="base-color" style="background-color: #f28216"  id="orange"></span>
        <span class="base-color" style="background-color: #ffcd00"  id="gold"></span>
        <span class="base-color" style="background-color: #ffec00"  id="yellow"></span>
        <span class="base-color" style="background-color: #b7ce0d"  id="lime"></span>
        <span class="base-color" style="background-color: #3f993f"  id="green"></span>
        <span class="base-color" style="background-color: #2faf9f"  id="teal"></span>
        <span class="base-color" style="background-color: #4673a3"  id="blue"></span>
        <span class="base-color" style="background-color: #745184"  id="purple"></span>
    </div>
    <div class="color-title"><h2 class="color-heading"></h2><div>
    <div class="color-scheme"></div>
<?php

  }
  add_shortcode('color_swatch', 'colorSwatch');
  ?>

 