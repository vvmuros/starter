<?php


add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
    register_block_type( __DIR__ . '/../../acf-blocks/testimonial' );
}
 

function print_pr($code){
    echo "<pre>";
    print_r($code);
    echo "</pre>";
}
