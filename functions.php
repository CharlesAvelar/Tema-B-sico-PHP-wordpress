<?php 
function arphabet_widgets_init() {
register_sidebar( array (
      'name' => 'Sidebar Lateral',
      'id'=> 'lateral_1',
      'before_widget'=>'<div>',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>',
    ));
}
add_action('widgets_init','arphabet_widgets_init');
?>
