<div class="notes">
  <?php for($n=0; $n<2; $n++) : ?>
    <input type="checkbox" name="note-<?= $n; ?>" id="note-<?= $n; ?>">
    <label class="notes__item" for="note-<?= $n; ?>">
      <div class="notes__item__title">Item</div>
      <div class="notes__item__checklist"></div>
      <div class="notes__item__date">13 sty</div>
    </label>
    <input type="checkbox" name="note-0<?= $n; ?>" id="note-0<?= $n; ?>">
    <label class="notes__item" for="note-0<?= $n; ?>">
      <div class="notes__item__title">Item</div>
      <div class="notes__item__checklist notes__item__checklist--isChecklist"></div>
      <div class="notes__item__date">13 sty</div>
    </label>
  <?php endfor; ?>
  </div>