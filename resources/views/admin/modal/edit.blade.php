<div class="container">
    <div class="row">
        <div class="col">
            <form class="edit_action" method="post" name="edit_action">
                @csrf
                <div class="row justify-content-center">
                    <h3 class="col staff_admin_title_button">Сотрудник</h3>
                    <button data-dismiss="modal" class="exit_button">
                        <img src="../media/icon/icon-close.png" alt="Иконка закрыть" width="30px">
                    </button>
                </div>
                <div>
                    <div class="staff_admin_title_text">
                        <div>ФИО</div>
                        <div class="row">
                            <div class="pt-3 pb-4 pr-0 col-md-auto" id="surnameEdit"></div>
                            <div class="pt-3 pb-4 pr-0 pl-1 col-md-auto" id="nameEdit"></div>
                            <div class="pt-3 pb-4 pr-0 pl-1 col-md-auto" id="patronymicEdit"></div>
                        </div>
                    </div>

                    <div class="staff_line"></div>

                    <div class="staff_admin_title_text">
                        <div>Номер телефона</div>
                        <div class="pt-3 pb-4" id="numberEdit"></div>
                    </div>

                    <div class="staff_line"></div>

                    <div class="staff_admin_title_text">
                        <div>Почта</div>
                        <div class="pt-3 pb-4" id="emailEdit"></div>
                    </div>

                    <div class="staff_line"></div>

                    <div class="staff_admin_title_text">
                        <div>Должность</div>
                        <div class="pt-3 pb-4">
                            <select class="staff_admin_button_post" name="post">
                                <option value="Менеджер">Менеджер</option>
                                <option value="Админ">Админ</option>
                                <option value="ИТР">ИТР</option>
                            </select>
                        </div>
                    </div>

                    <div class="staff_line"></div>

                    <div class="staff_admin_title_text">
                        <div>Статус</div>
                        <div class="pt-3 pb-4">
                            <select class="staff_admin_button_post" name="status">
                                <option value="Ожидает">Ожидает</option>
                                <option value="Подтвержденный">Подтвержденный</option>
                            </select>
                        </div>
                    </div>

                    <div class="staff_line"></div>

                    <button type="submit" value="Submit" it="submit"
                            class="edit_button edit_button_text align-items-center justify-content-center">Изменить
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
