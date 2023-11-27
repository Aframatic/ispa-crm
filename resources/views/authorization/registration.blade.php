@include("header")
<div class="container">
        <div class="reg_box">
            <h5 class="reg_title">Регистрация</h5>
            <form method="post" action="{{ route('registration.post') }}" id="handleAjaxReg" class="reg_xbox">
                @csrf
                <div class="form-floating reg">
                    <div class="login_box">
                        <input type="text" class="login" id="email_address" placeholder="Введите почту" name="email">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="login_box">
                        <input type="text" class="login" id="surname" placeholder="Введите фамилию" name="surname">
                        @if ($errors->has('surname'))
                            <span class="text-danger">{{ $errors->first('surname') }}</span>
                        @endif
                    </div>

                    <div class="login_box">
                        <input type="text" class="login" id="name" placeholder="Введите имя" name="name">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="login_box">
                        <input type="text" class="login" id="patronymic" placeholder="Введите отчество"
                               name="patronymic">
                        @if ($errors->has('patronymic'))
                            <span class="text-danger">{{ $errors->first('patronymic') }}</span>
                        @endif
                    </div>

                    <div class="login_box">
                        <input class="login" name="number" id="online_phone" type="tel" maxlength="50"
                               autofocus="autofocus" required="required"
                               value="+7(___)___-__-__"
                               pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                               placeholder="+7(___)___-__-__">
                        @if ($errors->has('number'))
                            <span class="text-danger">{{ $errors->first('number') }}</span>
                        @endif
                    </div>

                    <div class="pb_1">
                        <select class="reg_post" name="post">`
                            <option value="Менеджер">Менеджер</option>
                            <option value="ИТР">ИТР</option>
                        </select>
                    </div>

                    <div class="login_box">
                        <input type="password" class="login" id="password" placeholder="Введите пароль" name="password">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="login_box">
                        <input type="password" class="login" id="again_password" placeholder="Повторите пароль"
                               name="again_password">
                        @if ($errors->has('again_password'))
                            <span class="text-danger">{{ $errors->first('again_password') }}</span>
                        @endif
                    </div>

                    <div class="error_list" id="errors-list"></div>
                    <div class="message" id="errmsg"></div>
                    <div><button type="submit" class="signin">Зарегистрироваться</button></div>

                </div>
            </form>
        </div>

</div>
<script src="js/authorization/registration.js"></script>

<script src="js/number_mask.js"></script>

@include("footer")

