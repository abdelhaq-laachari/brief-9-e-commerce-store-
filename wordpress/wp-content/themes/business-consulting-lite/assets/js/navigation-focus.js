var business_consulting_lite_Keyboard_loop = function (elem) {
  var business_consulting_lite_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');
  var business_consulting_lite_firstTabbable = business_consulting_lite_tabbable.first();
  var business_consulting_lite_lastTabbable = business_consulting_lite_tabbable.last();
  business_consulting_lite_firstTabbable.focus();

  business_consulting_lite_lastTabbable.on('keydown', function (e) {
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      business_consulting_lite_firstTabbable.focus();
    }
  });

  business_consulting_lite_firstTabbable.on('keydown', function (e) {
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      business_consulting_lite_lastTabbable.focus();
    }
  });

  elem.on('keyup', function (e) {
    if (e.keyCode === 27) {
      elem.hide();
    };
  });
};