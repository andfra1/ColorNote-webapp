<?php include_once ('inc/header.php'); ?>

<section>
  <div class="container">
    <?php 
    switch (isset($_GET['view']) ? $_GET['view'] : '') {
      case 'note-text' :
        include ('includes/note-text.php');
        break;
      case 'note-checklist' :
        include ('includes/note-checklist.php');
        break;
      default :
      include ('inc/header-html.php');
      include ('includes/notes.php');
    }
  ?>
  </div>
</section>

<?php
  if(isset($_GET['view'])) {
    include_once ('inc/footer-html.php');
  }
  else {
    include_once ('inc/footer.php');
  }
  ?>