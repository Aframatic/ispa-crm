$(function () {

    /*------------------------------------------
    --------------------------------------------
    Submit Event
    --------------------------------------------
    --------------------------------------------*/
    $(document).on("submit", "#handleAjax", function () {
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
                    document.getElementById('password').className = 'login_error';
                    document.getElementById('email_address').className = 'login_error';
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
