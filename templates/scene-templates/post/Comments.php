<link rel="stylesheet" href="/css/scenes/post/Comments.css">

<?php
  include('templates/shared-components/Comment.php')
?>

<?php function getComments() { ?>
  <div class="comments-section-container">
    <div class="comments-container">

      <hr>

      <h2 class="comments-title">
        Comments
      </div>

      <?php for ($i=0; $i < 5; $i++) {
        getComment();
      } ?>
    </div>
  </div>

<?php } ?>