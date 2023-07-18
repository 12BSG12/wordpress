<?php
/*
Template Name: МИССИЯ УНИВЕРСИТЕТА
*/
?>

<?php get_header() ?>
<div class="mt-5 px-3 2xl:px-0 my-2">
  <div class="bg-white rounded-lg drop-shadow-lg mb-3">
    <div class="p-3">
      <h2 class="text-2xl uppercase mb-2"><?php the_field( 'title' ); ?> </h2>
      <hr class="mb-5">
      <img class="m-auto mb-5 max-w-3xl max-h-96" src="<?php the_field( 'img' ); ?>"></img>
      <?php the_field( 'text' ); ?>
    </div>
  </div>
</div>
<?php get_footer() ?>
