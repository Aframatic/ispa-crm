<div class="container">
    <div class="row">
        <div class="col">
            <form class="comment_action" method="post" name="comment_action">
                @csrf
                <div class="row justify-content-center">
                    <h3 class="col project_admin_title_button">Комментарий к задаче</h3>
                    <button data-dismiss="modal" class="exit_button_project">
                        <img src="../media/icon/icon-close.png" alt="Иконка закрыть" width="30px">
                    </button>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="commentsProject" rows="3" style="min-height: 400px" name="commentsProject"></textarea>
                </div>
                <button type="submit" value="Submit" id="submit"
                        class="edit_button_project edit_button_text align-items-center justify-content-center">Изменить
                </button>
            </form>
        </div>
    </div>
</div>
