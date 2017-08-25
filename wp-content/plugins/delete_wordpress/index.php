<?php

/*

Plugin Name: killwordpress
Plugin URI:  https://example.com
Description: basic comment for plugin
Author:      gigi baza

*/

add_shortcode('afisare_text','delwp_afisare_text');
add_filter('widget_title','delwp_change_title');
add_filter('wp_footer','delwp_fb_like');

function delwp_afisare_text(){
    echo 'ana are mere';
}
function delwp_change_title($titlu){
    echo $titlu.':)';
}
function delwp_fb_like(){
    echo '<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fbucharestvigilantes%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden;padding-left:25%" scrolling="no" frameborder="1" allowTransparency="true"></iframe>';
}