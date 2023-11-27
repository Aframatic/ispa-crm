@include("header")
<div class="row mr-0">
    <div class="col-md-auto pr-0">
        <div class="left_bar">
            <h3 class="left_bar_title">ИСПА-Сервис CRM</h3>
            <div class="active_left_bar">
                <div class="left_bar_text">
                    <img src="../media/icon/icon-multiple-users.png" alt="Картинка пользователей" class="img_left_bar">
                    <a href="staff-manager" class="active_button_left_bar button_left_bar">Пользователи</a>
                </div>
            </div>

            <div class="not_active_left_bar">
                <div class="left_bar_text">
                    <img src="../media/icon/icon-clipboard.png" alt="Картинка списка задач" class="img_left_bar">
                    <a href="project-manager" class="not_active_button_left_bar button_left_bar">Проекты и задачи</a>
                </div>
            </div>

            <div class="not_active_left_bar">
                <div class="left_bar_text">
                    <img src="../media/icon/icon-settings.png" alt="Картинка настроек" class="img_left_bar">
                    <a href="setting-manager" class="not_active_button_left_bar button_left_bar">Настройки</a>
                </div>
            </div>
        </div>
    </div>

    <div class="staff_content col mr-0">
        <h3>Сотрудники</h3>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="input-group">
                    <input type="search" id="site-search" name="q" class="form-control" style="border-radius: 15px"
                           placeholder="Телефон, статус, ФИО..."/>
                    <button class="search_button search_text" style="margin-left: 40px; border-radius: 15px">
                        <img src="../media/icon/icon-search.png" alt="Картинка поиска" class="img_search">
                        Искать
                    </button>
                </div>
            </div>
        </div>

        @include("manager.staffs-manager")

    </div>
</div>

@include("footer")


