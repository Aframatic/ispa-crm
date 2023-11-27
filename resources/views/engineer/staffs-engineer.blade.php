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

