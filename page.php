<?php get_header( $name = null ) ?>

<h1>  esto es una pagina</h1>
<?php if( have_posts() ) {
  while ( have_posts() ) {
    the_content( $more_link_text = null, $strip_teaser = false );

  }
} else {
  /* No posts found */
} ?>
<?php get_footer( $name = null ) ?>
