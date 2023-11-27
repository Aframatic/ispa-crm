const $modal = $('#editProject');

// тут ищите все кнопки (можно им какой-нибудь класс придумать уникальный, например js-btn-ban)
// далее в цикле вешаете события
const button = document.querySelectorAll('.edit-project');
button.forEach(currentButton => {
    currentButton.addEventListener('click', function () {
        const nameEdit = this.dataset.name;
        const data_startEdit = this.dataset.datastart;
        const data_endEdit = this.dataset.dataend;
        const statusEdit = this.dataset.status;
        const commentEdit = this.dataset.comment;
        const action = this.dataset.id;

        $('.edit_action[name="edit_action"]').attr("action", '/project-admin/edit/' + action);

        $('#nameProject').val(nameEdit);
        $('#dataStartProject').val(data_startEdit);
        $('#dataEndProject').val(data_endEdit);
        $('textarea#commentProject.form-control').val(commentEdit);

        $('select[name="statusProject"]').find('option').each(function (key, val) {
            if ($(val).val() === statusEdit) {
                $(val).attr("selected", "selected")
            } else {
                $(val).removeAttr("selected", "selected")
            }
        })

        $modal.modal('show'); //показываем модалку

    });
});

