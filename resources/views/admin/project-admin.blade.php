@include("header")
<div class="row mr-0">
    <div class="col-md-auto pr-0">
        <div class="left_bar">
            <h3 class="left_bar_title">ИСПА-Сервис CRM</h3>
            <div class="not_active_left_bar">
                <div class="left_bar_text">
                    <img src="../media/icon/icon-multiple-users.png" alt="Картинка пользователей" class="img_left_bar">
                    <a href="staff-admin" class="not_active_button_left_bar button_left_bar">Пользователи</a>
                </div>
            </div>

            <div class="active_left_bar">
                <div class="left_bar_text">
                    <img src="../media/icon/icon-clipboard.png" alt="Картинка списка задач" class="img_left_bar">
                    <a href="project-admin" class="active_button_left_bar button_left_bar">Проекты и задачи</a>
                </div>
            </div>

            <div class="not_active_left_bar">
                <div class="left_bar_text">
                    <img src="../media/icon/icon-settings.png" alt="Картинка настроек" class="img_left_bar">
                    <a href="setting-admin" class="not_active_button_left_bar button_left_bar">Настройки</a>
                </div>
            </div>
        </div>
    </div>

    <div class="staff_content col mr-0">
        <h3>Проекты и задачи</h3>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="input-group">
                    <input type="search" id="site-search" name="q" class="form-control" style="border-radius: 15px"
                           placeholder="Название проекта, создатель проекта..."/>
                    <button class="search_button search_text" style="margin-left: 40px; border-radius: 15px">
                        <img src="../media/icon/icon-search.png" alt="Картинка поиска" class="img_search">
                        Искать
                    </button>
                </div>
            </div>
        </div>

        <div class="row staff_admin_title">
            <div class="col-md-auto number_project">№</div>
            <div class="col-3">Название проекта</div>
            <div class="col-3">Создатель проекта</div>
            <div class="col">Статус</div>
            <div class="col">Дата начала</div>
            <div class="col">Дата конца</div>
            <div class="col-2"></div>
        </div>

        <div class="staff_line"></div>

        @foreach ($project as $projects)
            <div class="row staff_admin_text bg-light-gray">
                <div class="col-md-auto number_project">{{ $projects->id ?? ''}}</div>
                <div class="col-3">{{ $projects->name ?? ''}}</div>
                <div class="col-3">{{ $projects->name_creator ?? ''}}</div>
                <div class="col">{{ $projects->status ?? ''}}</div>
                <div class="col">{{ \Carbon\Carbon::parse($projects->data_start)->format('d.m.Y H:i') ?? '' }}</div>
                <div class="col">{{ \Carbon\Carbon::parse($projects->data_end)->format('d.m.Y H:i') ?? '' }}</div>
                <div class="col-2 text-center">
                    <a type="button" class="text-reset">
                        <img src="../media/icon/icon-list.png" alt="Картинка задач" class="img_staff_admin"
                             style="margin-bottom:2px; width: 30px">
                    </a>
                    <a type="button" class="text-reset-delete comment-project" data-ids="{{ $projects->id }}"
                       data-comments="{{ $projects->comment }}">
                        <img src="../media/icon/icon-comment.png" alt="Картинка комментария" class="img_staff_admin">
                    </a>
                    <a type="button" class="text-reset edit-project" data-name="{{ $projects->name }}"
                       data-datastart="{{ $projects->data_start }}" data-dataend="{{ $projects->data_end }}"
                       data-status="{{ $projects->status }}" data-id="{{ $projects->id }}"
                       data-comment="{{ $projects->comment }}">
                        <img src="../media/icon/icon-edit.png" alt="Картинка редактирования" class="img_staff_admin"
                             style="margin-bottom:3px">
                    </a>
                    <a type="button" class="text-reset-delete delete-project" data-names="{{ $projects->name }}"
                       data-id_delete="{{ $projects->id }}">
                        <img src="../media/icon/icon-delete.png" alt="Картинка удаления" class="img_staff_admin"
                             style="margin-bottom:3px">
                    </a>
                </div>
            </div>
        @endforeach
        <div class="row paginations">
            <div class="col pagination-text">
                {{ $project->links() }}
            </div>
        </div>
        <button class="add_button_project add-project" style="border-radius: 15px">
            Добавить
        </button>
    </div>
</div>

@include("footer")

<!-- Модальное окно комментария к проекту-->
<div class=" modal fade
        " id="commentToProject">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal_content_edit">
            @include('admin/modal/project/comment')
        </div>
    </div>
</div>

<!-- Модальное окно редактирования проекта-->
<div class="modal fade" id="editProject">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal_content_delete">
            @include('admin/modal/project/edit')
        </div>
    </div>
</div>

<!-- Модальное окно удаления пользователя-->
<div class="modal fade" id="deleteProject">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal_content_delete">
            @include('admin/modal/project/delete')
        </div>
    </div>
</div>

<!-- Модальное окно добавления проекта-->
<div class="modal fade" id="addProject">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal_content_delete">
            @include('admin/modal/project/add')
        </div>
    </div>
</div>

<script src="../js/admin/project/add.js"></script>
<script src="../js/admin/project/comment.js"></script>
<script src="../js/admin/project/edit.js"></script>
<script src="../js/admin/project/delete.js"></script>
