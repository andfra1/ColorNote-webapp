/*jshint esversion: 6 */

var del = document.getElementById('jsDelete');
var note = document.getElementsByClassName('notes__item');

del.addEventListener('click', deleteNote, false);

function deleteNote() {
  var confirmation = confirm('Are you sure?');
  if (confirmation) {
    for (var n = 0; n < note.length; n++) {
      if (note[n].firstChild.checked) {
        note[n].style.display = "none";
      }
    }
  }
}