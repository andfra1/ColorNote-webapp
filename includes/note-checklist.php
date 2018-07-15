<?php
include ('note-header.php');
$list = ['Some list item', 'Another item', 'Xadfsd'];
?>
  <div class="modal">
    <div class="modal__add">
      <div class="modal__add__header">
        Add Item
      </div>
      <div class="modal__add__input">
        <input type="text">
      </div>
      <div class="modal__add__bttnGroup">
        <button class="btn" type="button" value="Cancel">Cancel</button>
        <button class="btn" type="button" value="Next">Next</button>
        <button class="btn" type="button" value="OK">OK</button>
      </div>
    </div>
  </div>
  <div class="note__content">
    <ul class="note__content__list">
      <?php foreach($list as $key => $item) : ?>
      <li>
        <input type="checkbox" name="" id="item-0<?= $key; ?>">
        <label for="item-0<?= $key; ?>">
          <?= $item; ?>
        </label>
        <button class="note__content__options"></button>
      </li>
      <?php endforeach; 
      ?>
    </ul>
  </div>