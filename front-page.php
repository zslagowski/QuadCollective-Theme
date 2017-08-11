<?php get_header();

$args = array (
    'pagename' => 'home'
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
	<div class="qc-frontpage-header-image-top" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
    <div class="qc-header-text-paralax text-center">
      <img class="aligncenter wp-image-142 size-thumbnail text-center" src="https://quadcollective.com/wp-content/uploads/2017/04/QC-Logo-Stamp-Middle-Green.png" alt="" width="150" height="150" />
      When you go from this <img class="qc-emoji-icons" src="https://quadcollective.com/wp-content/uploads/2017/04/running-man-emoji-e1492099202708.png">to this <img class="qc-emoji-icons" src="https://quadcollective.com/wp-content/uploads/2017/04/wheelchair-emoji-e1492099189795.png"><br />
      You need answers.<br />
      <em><strong><span style="font-family:'Arvo';">Welcome Home</span></strong></em>
    </div>
  </div>
<?php }
?>


<div class="container qc-frontpage">
    <?php the_content(); ?>
</div>

get_footer();