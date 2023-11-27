<div class="container">
    <div class="row">
        <div class="col">
            <form class="delete_action" method="post" name="delete_action">
                @csrf
                <div class="row justify-content-center">
                    <h3 class="col staff_admin_title_button_delete">Удалить пользователя?</h3>
                    <button data-dismiss="modal" class="exit_button_delete">
                        <img src="../media/icon/icon-close.png" alt="Иконка закрыть" width="30px">
                    </button>
                </div>
                <div>
                    <div class="staff_admin_title_text_delete">
                        <ul class="nav">
                            <li class="nav-item">Вы удаляете пользователя</li>
                            <li class="nav-item pl-1" id="surnameDelete"></li>
                            <li class="nav-item pl-1" id="nameDelete"></li>
                            <li class="nav-item pl-1" id="patronymicDelete"></li>
                            <li class="nav-item" id="emailDelete"></li>
                            <li class="nav-item"> .Вы уверены?</li>
                            <li class="nav-item"> После удаления пользователь не сможет войти в систему</li>
                        </ul>

                    </div>

                    <div class="both_button_delete">
                        <button data-dismiss="modal"
                                class="cancel_button_delete edit_button_text align-items-center justify-content-center">
                            Отмена
                        </button>
                        <button type="submit" value="Submit" it="submit"
                                class="accept_button_delete edit_button_text align-items-center justify-content-center">
                            Удалить
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
