if ($('#jsonHere')) {
  $.getJSON("./json/notes.json", function (data) {
    var items = [];
    $.each(data, function (key, val) {
      items.push(
        '<li class="notes__item notes__item--' + val.color + '"><input type="checkbox" name="note-' + key + '" id="note-' + key + '" class="notes__checkbox"><a href="?view=note-text" class="notes__item__link"><div class="notes__item__title">' + val.title + '</div><div class="notes__item__reminder" data-reminder="' + val.reminder + '"></div><div class="notes__item__status" data-status="' + val.status + '"></div><div class="notes__item__date">' + val.created + '</div></a><label class="notes__item__check" for="note-' + key + '"></label></li>');
    });

    $("<ul/>", {
      "class": "notes",
      html: items.join("")
    }).prependTo("#jsonHere");
  });
}