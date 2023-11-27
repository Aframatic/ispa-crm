const $modal_add = $('#addProject');

// тут ищите все кнопки (можно им какой-нибудь класс придумать уникальный, например js-btn-ban)
// далее в цикле вешаете события
const button_add = document.querySelectorAll('.add-project');
button_add.forEach(currentButton => {
    currentButton.addEventListener('click', function () {


        $('.add_action[name="add_action"]').attr("action", '/project-admin/add/');


        $modal_add.modal('show'); //показываем модалку

    });
});

