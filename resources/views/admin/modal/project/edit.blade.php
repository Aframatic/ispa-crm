<div class="container">
    <div class="row">
        <div class="col">
            <form class="edit_action" method="post" name="edit_action">
                @csrf
                <div class="row justify-content-center">
                    <h3 class="col staff_admin_title_button">Изменение проекта</h3>
                    <button data-dismiss="modal" class="exit_button_edit_project">
                        <img src="../media/icon/icon-close.png" alt="Иконка закрыть" width="30px">
                    </button>
                </div>
                <div>
                    <div class="project_admin_title_text">
                        <div class="title_edit_project">Название проекта</div>
                        <input type="text" class="input_edit_project" id="nameProject" placeholder="Название проекта"
                               name="nameProject">
                    </div>
                </div>

                <div class="project_admin_title_text">
                    <div class="title_edit_project">Дата начала</div>
                    <input type="datetime-local" class="input_edit_project" id="dataStartProject"
                           placeholder="Дата начала"
                           name="dataStartProject">
                </div>

                <div class="project_admin_title_text">
                    <div class="title_edit_project">Дата конца</div>
                    <input type="datetime-local" class="input_edit_project" id="dataEndProject" placeholder="Дата конца"
                           name="dataEndProject">
                </div>

                <div class="project_admin_title_text">
                    <div class="title_edit_project">Статус</div>
                    <div class="pb-4">
                        <select class="project_admin_button_post" name="statusProject">
                            <option value="Завершен">Завершен</option>
                            <option value="В процессе">В процессе</option>
                            <option value="Приостановлен">Приостановлен</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                        <textarea class="form-control" id="commentProject" rows="3" name="commentProject"
                                  style="min-height: 150px"></textarea>
                </div>

                <button type="submit" value="Submit" it="submit"
                        class="edit_button_edit_project edit_button_text align-items-center justify-content-center">
                    Изменить
                </button>
            </form>
        </div>
    </div>
</div>

