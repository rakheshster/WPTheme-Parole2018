<?php 
//query_posts(array('nopaging' => 1, /* we want all posts, so disable paging. Order by date is default */));
$prev_year = null; ?>
<article id="post-<?php the_ID(); ?>" class="hentry list-loop">
<?php if ( have_posts() ) {
   while ( have_posts() ) {
      the_post();
      $this_year = get_the_date('Y');
      if ($prev_year != $this_year) {
          // Year boundary
          if (!is_null($prev_year)) {
             // A list is already open, close it first
             echo '</ul>';
          }
		   if ( !(is_year() || is_month() || is_date())  ) : 
          echo '<h3 class="entry-header-list">' . $this_year . '</h3>';
		   endif; 
          echo '<ul  class="entry-content-list">';
      }
      echo '<li>'; ?>
	  <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><h2><?php the_title();?></h2> <time><?php the_time( 'j M' ); ?></time></a>

<?php      // Print the link to your post here, left as an exercise to the reader
      echo '</li>';
      $prev_year = $this_year;
   }
   echo '</ul>';
} ?>
</article>
<?php ?>