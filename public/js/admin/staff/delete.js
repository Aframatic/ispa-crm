const $modals = $('#deleteStaff');
const $nameDelete = $modals.find('#nameDelete');
const $surnameDelete = $modals.find('#surnameDelete');
const $patronymicDelete = $modals.find('#patronymicDelete');
const $emailDelete = $modals.find('#emailDelete');

// тут ищите все кнопки (можно им какой-нибудь класс придумать уникальный, например js-btn-ban)
// далее в цикле вешаете события
const button = document.querySelectorAll('.text-reset-delete');
button.forEach(currentButton => {
    currentButton.addEventListener('click', function () {
        const nameDelete = this.dataset.names;
        const surnameDelete = this.dataset.surnames;
        const patronymicDelete = this.dataset.patronymics;
        const emailDelete = this.dataset.emails;
        const actionDelete = this.dataset.ids;
        const path = this.dataset.path;

        $nameDelete.text(nameDelete); // выводим name пользователя
        $surnameDelete.text(surnameDelete); // выводим surname пользователя
        $patronymicDelete.text(patronymicDelete); // выводим patronymic пользователя
        $emailDelete.text('(' + emailDelete + ')'); // выводим email пользователя

        $('.edit_action[name="delete_action"]').attr("action", '/staff-admin/delete/' + actionDelete);

        $modals.modal('show'); //показываем модалку

    });
});

