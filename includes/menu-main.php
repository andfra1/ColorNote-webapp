<?php
$avatar = './img/avatar.jpg';
$name = 'David Haselhoff';
$menuMain = ['Notes','Calendar','Archive','Trash Can','Search','Theme','Settings']
?>

<button class="btn burger"></button>
<nav class="menu menu-main">
      <div class="menu-main__profile">
        <div class="menu-main__profile__avatar">
          <img src="<?= $avatar; ?>" alt="avatar">
        </div>
        <div class="menu-main__profile__name">
        <?= $name; ?>
        </div>
        <div class="menu-main__profile__sync">

        </div>
      </div>
      <ul>
        <?php foreach($menuMain as $key) : ?>
        <li>
          <a href="#">
            <?= $key; ?>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
    </nav>