<?php if (have_posts()): while (have_posts()): the_post();?>
<?php the_content();?>


<div class="movie-card flex-lg-row flex-sm-column d-flex flex-column ">
     <div class="movie-img">
          <img src="<?php echo get_field('image'); ?>" alt="" class="img-fluid ml-3 mr-4">
     </div>
     <div class="movie-detail">
          <h1><?php echo get_post_meta(get_the_ID(), 'name', true);?></h1><br>
          <h4><?php echo get_post_meta(get_the_ID(), 'year', true);?> .
               <?php echo get_post_meta(get_the_ID(), 'rate', true);?>/100
          </h4>
          <h4>
               <?php echo get_post_meta(get_the_ID(), 'run_time', true);?></h4>

     </div>

</div>

<section id="review">
     <hr>
     <h2>Review</h2>
     <div>
          <p><?php echo get_post_meta(get_the_ID(), 'review', true);?></p>
     </div>

</section>
<?php //comments_template();?>

<?php endwhile; else:endif;?>