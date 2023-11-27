$(function () {

    /*------------------------------------------
    --------------------------------------------
    Submit Event
    --------------------------------------------
    --------------------------------------------*/
    $(document).on("submit", "#handleAjaxReg", function () {
        var e = this;

        $.ajax({
            url: $(this).attr('action'),
            data: $(this).serialize(),
            type: "POST",
            dataType: 'json',
            success: function (data) {

                if (data.status) {
                    window.location = data.redirect;
                } else {
                    document.getElementById('email_address').className = 'login_error';
                    document.getElementById('surname').className = 'login_error';
                    document.getElementById('name').className = 'login_error';
                    document.getElementById('patronymic').className = 'login_error';
                    document.getElementById('online_phone').className = 'login_error';
                    document.getElementById('password').className = 'login_error';
                    document.getElementById('again_password').className = 'login_error';
                    $(".alert").remove();

                    $.each(data.errors, function (key, val) {
                        $("#errors-list").append("<div class='alert error_authorization'>" +
                            "<div class='text-danger'>" + val +
                            "</div>" +
                            "</div>");
                    });

                }
            }
        });
        return false;
    });
});
