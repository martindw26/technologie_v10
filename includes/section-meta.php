<div class="container-fluid border border-dark border border-1 pb-1 bg-light">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <?php
      // Get the ACF field value for author_profile_image
      $author_profile_image = get_field('author_profile_image');
    ?>
    <img class="p-2" src="<?php echo $author_profile_image; ?>" style="width:25%; object-fit: cover; object-position: center; border-radius: 50%;">

      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
       <div class="card-body">
        <h5 class="card-title">By <?php the_author_meta('display_name', 1); ?></h5>
        <p class="card-text"><i>Posted </i><?php echo get_the_date();?></p>
        <p class="card-text"><small class="text-muted">
        </small></p>
      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <?php
$author_id = get_the_author_meta('ID');
$author_bio = get_the_author_meta('description', $author_id);

echo $author_bio;
?>
      </div>
    </div>
  </div>
  <hr>