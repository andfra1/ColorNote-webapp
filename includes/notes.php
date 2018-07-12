<div class="notes">
  <?php for($n=0; $n<2; $n++) : ?>

  <input type="checkbox" name="note-<?= $n; ?>" id="note-<?= $n; ?>">
  <div class="notes__item">
    <div class="notes__item__title">Item</div>
    <div class="notes__item__checklist"></div>
    <div class="notes__item__date">13 sty</div>
    <label class="notes__item__check" for="note-<?= $n; ?>">
    </label>
  </div>
  
  <input type="checkbox" name="note-0<?= $n; ?>" id="note-0<?= $n; ?>">
  <div class="notes__item">
    <div class="notes__item__title">Item</div>
    <div class="notes__item__status notes__item__status--checklist"></div>
    <div class="notes__item__date">13 sty</div>

    <label class="notes__item__check" for="note-0<?= $n; ?>">
    </label>
  </div>
  <?php endfor; ?>
</div>