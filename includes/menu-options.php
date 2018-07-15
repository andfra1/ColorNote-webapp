<?php
$menuOptions = [
'Color',
'Sort',
'View',
'Search',
'Sync',
'Settings'
]
?>

  <nav class="menu menu-options">
    <ul>
      <?php foreach($menuOptions as $key) : ?>
      <li>
        <a href="#">
          <?= $key; ?>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </nav>