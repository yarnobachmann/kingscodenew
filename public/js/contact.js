// closes the panel on click outside
$(document).mouseup(function (e) {

    $(".contact-panel-button").click(function() {
  $('#contact-panel').toggleClass('is-active');
});
});
