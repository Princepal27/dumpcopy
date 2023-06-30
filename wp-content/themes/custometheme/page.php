<?php get_header();

global $post;     // if outside the loop

if(get_field('location')){

if ( is_page() && $post->post_parent ) {
   get_template_part('city');
} else {
   get_template_part('state');
}
}
elseif(get_field('linked')){
  get_template_part('listing_page');
}
else{
  get_template_part('normal_page');
}
?>



<?php get_footer(); ?>