<?php

if ( ! defined( 'ABSPATH' ) ) exit;

/*
|--------------------------------------------------------------------------
| Global functions
|--------------------------------------------------------------------------
|
| Here you can insert your global function loaded by composer settings.
|
*/

if ( ! function_exists( 'myGlobalFunction' ) ) {

  function myGlobalFunction()
  {
    //
  }
}



add_action( 'add_meta_boxes', function() {
  function custom_meta_box(){ ?>
      <section>
          <h3>Custom Meta Box</h3>
          <div>
              <input type="text">
          </div>
      </section>

      <div id="tribe-metabox"></div>
      <?php
  }

  add_meta_box(
      'tribe-meta-box',    // Meta box ID
      'Meta Box',    // Meta box title
      'custom_meta_box', // Callback function to render the content
      'post',              // Post type (you can use 'page' for pages)
      'normal',            // Context (can be 'advanced', 'normal', or 'side')
      'high'               // Priority (can be 'default', 'high', 'low', or 'core')
  );
});