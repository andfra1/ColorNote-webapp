if ($('#jsonHere')) {
  $.getJSON("./json/notes.json", function (data) {
    var items = [];
    $.each(data, function (key, val) {
      items.push('<li class="notes__item"><input type="checkbox" name="note-' + key + '" id="note-' + key + '" class="notes__checkbox"><a href="?view=note-text" class="notes__item__link"><div class="notes__item__title">' + val + '</div><div class="notes__item__checklist"></div><div class="notes__item__date">13 Jan</div></a><label class="notes__item__check" for="note-' + key + '"></label></li>');
    });

    $("<ul/>", {
      "class": "notes",
      html: items.join("")
    }).prependTo("#jsonHere");
  });
}