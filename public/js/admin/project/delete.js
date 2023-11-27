const $modals_delete = $('#deleteProject');
const $nameDelete = $modals_delete.find('#nameDelete');

// тут ищите все кнопки (можно им какой-нибудь класс придумать уникальный, например js-btn-ban)
// далее в цикле вешаете события
const button_delete = document.querySelectorAll('.delete-project');
button_delete.forEach(currentButton => {
    currentButton.addEventListener('click', function () {

        const nameDelete = this.dataset.names;
        const actionDelete = this.dataset.id_delete;

        $nameDelete.text( "(" + nameDelete + ")"); // выводим name пользователя


        $('.delete_action[name="delete_action"]').attr("action", '/project-admin/delete/' + actionDelete);

        $modals_delete.modal('show'); //показываем модалку

    });
});

