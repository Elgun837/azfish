$('input[type="tel"]').mask('+994(88) 888-88-88').data('start', 0).on('click', function() {
    const start = $(this).val().indexOf('_');
    if(!$(this).data('start')) $(this).data('start', start);
    if(start == $(this).data('start')) $(this)[0].setSelectionRange(start, start);
});

// window.onkeydown = function(evt) {
//     if(evt.keyCode == 123 || (evt.ctrlKey && evt.shiftKey && evt.keyCode == 'J'.charCodeAt(0))) { 
//         return false;
//     }
// };