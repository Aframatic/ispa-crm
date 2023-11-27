@include("header")
<div class="row mr-0">
    <div class="col-md-auto pr-0">
        <div class="left_bar">
            <h3 class="left_bar_title">ИСПА-Сервис CRM</h3>
            <div class="not_active_left_bar">
                <div class="left_bar_text">
                    <img src="../media/icon/icon-multiple-users.png" alt="Картинка пользователей" class="img_left_bar">
                    <a href="staff-engineer" class="not_active_button_left_bar button_left_bar">Пользователи</a>
                </div>
            </div>

            <div class="not_active_left_bar">
                <div class="left_bar_text">
                    <img src="../media/icon/icon-clipboard.png" alt="Картинка списка задач" class="img_left_bar">
                    <a href="project-engineer" class="not_active_button_left_bar button_left_bar">Проекты и задачи</a>
                </div>
            </div>

            <div class="active_left_bar">
                <div class="left_bar_text">
                    <img src="../media/icon/icon-settings.png" alt="Картинка настроек" class="img_left_bar">
                    <a href="setting-engineer" class="active_button_left_bar button_left_bar">Настройки</a>
                </div>
            </div>
        </div>
    </div>

    <div class="staff_content col mr-0">
        <h3>Настройки</h3>

        <div class="row staff_admin_title">
            <div class="col-3">Параметр</div>
            <div class="col-2">Значение</div>
        </div>
        <div class="staff_line"></div>

        <div class="row staff_admin_text bg-light-gray">
            <div class="col-3">Пользователь</div>
            <div class="col-8">{{ $users->surname }} {{ $users->name }} {{ $users->patronymic }}</div>
            <div class="col text-center">
                <a type="button" href="../logout" class="text-reset">
                    <img src="../media/icon/icon-logout.png" alt="Картинка удаления" class="img_staff_admin">
                </a>
            </div>
        </div>
    </div>
</div>

@include("footer")


