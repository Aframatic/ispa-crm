const $modals = $('#commentToProject');

// тут ищите все кнопки (можно им какой-нибудь класс придумать уникальный, например js-btn-ban)
// далее в цикле вешаете события
const buttons = document.querySelectorAll('.comment-project');
buttons.forEach(currentButton => {
    currentButton.addEventListener('click', function () {
        const commentsEdit = this.dataset.comments;
        const actions = this.dataset.ids;

        $('.comment_action[name="comment_action"]').attr("action", '/project-admin/comment/' + actions);

        $('textarea#commentsProject.form-control').val(commentsEdit);

        $modals.modal('show'); //показываем модалку

    });
});

