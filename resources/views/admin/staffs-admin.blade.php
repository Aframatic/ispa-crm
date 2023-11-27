<div class="row staff_admin_title">
    <div class="col-3">ФИО</div>
    <div class="col-2">Номер телефона</div>
    <div class="col-2">Почта</div>
    <div class="col-2">Должность</div>
    <div class="col-2">Статус</div>
</div>

<div class="staff_line"></div>

@foreach ($users as $user)
    <div class="row staff_admin_text bg-light-gray">
        <input type="hidden" value="{{$user->id}}" name="id_user">
        <div class="col-3">{{ $user->surname ?? ''}} {{ $user->name ?? ''}} {{ $user->patronymic ?? ''}}</div>
        <div class="col-2">{{ $user->number ?? ''}}</div>
        <div class="col-2">{{ $user->email ?? ''}}</div>
        <div class="col-2">{{ $user->post ?? '' }}</div>
        <div class="col-1">{{ $user->status ?? '' }}</div>
        <div class="col text-center">
            <a type="button" class="text-reset" data-email="{{ $user->email }}" data-id="{{ $user->id }}"
               data-name="{{ $user->name }}" data-surname="{{ $user->surname }}"
               data-patronymic="{{ $user->patronymic }}" data-post="{{ $user->post }}"
               data-status="{{ $user->status }}" data-number="{{ $user->number }}">
                <img src="../media/icon/icon-edit.png" alt="Картинка редактирования" class="img_staff_admin">
            </a>
            <a type="button" class="text-reset-delete" data-emails="{{ $user->email }}" data-ids="{{ $user->id }}"
               data-names="{{ $user->name }}" data-surnames="{{ $user->surname }}"
               data-patronymics="{{ $user->patronymic }}">
                <img src="../media/icon/icon-delete.png" alt="Картинка удаления" class="img_staff_admin">
            </a>
        </div>
    </div>
@endforeach

<!-- Модальное окно редактирования пользователя-->
<div class="modal fade" id="editStaff">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal_content_edit">
            @include('admin/modal/edit')
        </div>
    </div>
</div>

<!-- Модальное окно удаления пользователя-->
<div class="modal fade" id="deleteStaff">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal_content_delete">
            @include('admin/modal/delete')
        </div>
    </div>
</div>

<script src="../js/admin/staff/edit.js"></script>
<script src="../js/admin/staff/delete.js"></script>
