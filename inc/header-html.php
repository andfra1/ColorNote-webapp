<?php
include_once ('inc/header.php');
?>
  <header class="header">
    <div class="container">
      <div>
        <div>
          <?php include ('includes/menu-main.php'); ?>
          <div class="logo">
            <img src="./img/logo.png" alt="ColorNote - Best Notepad & Notes App">
          </div>
        </div>
        <div>
          <button class="btn add-note" value="off">
          </button>
          <?php include ('includes/menu-options.php'); ?>
        </div>
      </div>
      <div class="sort">
        <div>
          <span>Sort by modified time</span>
        </div>
      </div>
    </div>
  </header>
  <div class="header-spacer"></div>