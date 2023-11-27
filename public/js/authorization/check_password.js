$('body').on('click', '.password-control', function(){
    if ($('#password-input').attr('type') == 'password'){
        $(this).addClass('view');
        $('#password-input').attr('type', 'text');
    } else {
        $(this).removeClass('view');
        $('#password-input').attr('type', 'password');
    }
    return false;
});

$('body').on('click', '.password-control2', function(){
    if ($('#password-input2').attr('type') == 'password'){
        $(this).addClass('view');
        $('#password-input2').attr('type', 'text');
    } else {
        $(this).removeClass('view');
        $('#password-input2').attr('type', 'password');
    }
    return false;
});
