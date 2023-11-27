const $modal = $('#editStaff');
const $nameEdit = $modal.find('#nameEdit');
const $surnameEdit = $modal.find('#surnameEdit');
const $patronymicEdit = $modal.find('#patronymicEdit');
const $numberEdit = $modal.find('#numberEdit');
const $emailEdit = $modal.find('#emailEdit');
// const $postEdit = $modal.find('#postEdit');
// const $statusEdit = $modal.find('#statusEdit');

// тут ищите все кнопки (можно им какой-нибудь класс придумать уникальный, например js-btn-ban)
// далее в цикле вешаете события
const buttons = document.querySelectorAll('.text-reset');
buttons.forEach(currentButton => {
    currentButton.addEventListener('click', function () {
        const nameEdit = this.dataset.name;
        const surnameEdit = this.dataset.surname;
        const patronymicEdit = this.dataset.patronymic;
        const numberEdit = this.dataset.number;
        const emailEdit = this.dataset.email;
        const postEdit = this.dataset.post;
        const statusEdit = this.dataset.status;
        const action = this.dataset.id;
        const path = this.dataset.path;

        $nameEdit.text(nameEdit); // выводим name пользователя
        $surnameEdit.text(surnameEdit); // выводим surname пользователя
        $patronymicEdit.text(patronymicEdit); // выводим patronymic пользователя
        $numberEdit.text(numberEdit); // выводим number пользователя
        $emailEdit.text(emailEdit); // выводим email пользователя
        // $postEdit.find('select[name="post"]'); // выводим post пользователя
        // $statusEdit.text(statusEdit); // выводим status пользователя

        $('.edit_action[name="edit_action"]').attr("action", '/staff-admin/edit/' + action);

        $('select[name="post"]').find('option').each(function (key, val) {
            if ($(val).val() === postEdit) {
                $(val).attr("selected", "selected")
            } else {
                $(val).removeAttr("selected", "selected")
            }
        })

        $('select[name="status"]').find('option').each(function (key, val) {
            if ($(val).val() === statusEdit) {
                $(val).attr("selected", "selected")
            } else {
                $(val).removeAttr("selected", "selected")
            }
        })


        $modal.modal('show'); //показываем модалку

    });
});

