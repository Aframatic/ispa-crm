@include("header")

<div class="container">

        <div class="auth_box">
            <h5 class="auth_title">Аутентификация</h5>
            <form method="post" action="{{ route('authorization.post') }}" id="handleAjax" class="auth_xbox">
                @csrf

                <div class="form-floating auth">
                    <div class="login_box">
                        <input type="text" class="login" id="email_address" placeholder="Почта" name="email">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="login_box">
                        <input type="password" class="login" id="password" placeholder="Пароль" name="password" autocomplete="off">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="error_list" id="errors-list"></div>
                    <div class="message" id="errmsg"></div>

                    <div class="row remember_me">

                        <div class="col-5 row">
                            <input type="checkbox" name="remember" value="1" class="col-md-auto button_remember">
                            <div class="col-md-auto remember">Запомнить</div>
                        </div>

                        <div class="col row ms-8">
                            <div class="col-md-auto p-0 m-0 account_none">Нет аккаунта?</div>
                            <a href="{{ route('registration') }}" class="col-md-auto p-0 button_registration">Регистрация</a>
                        </div>
                    </div>

                    <button type="submit" class="signin">Войти</button>
                </div>
            </form>
        </div>

</div>
<script src="js/authorization/authorization.js"></script>

@include("footer")



