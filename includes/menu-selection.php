<?php
$selection = ['archive', 'delete', 'color', 'reminder', 'lock'];
?>
<div class="selection" id="jsSelection">
  <?php foreach($selection as $item) : ?>
  <button class="btn selection__item">
  <span class="icon-<?= $item?>"></span><?= $item?>
  </button>
<?php endforeach; ?>
</div>