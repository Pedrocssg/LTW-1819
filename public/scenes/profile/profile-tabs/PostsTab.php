<?php function getProfilePosts() { ?>
  <div class="tab-container">
    <?php
    for ($i=0; $i < 8; $i++) {
      getPost();
    }
    ?>
  </div>
<?php } ?>
