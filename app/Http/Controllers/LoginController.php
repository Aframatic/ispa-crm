<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\StatusUser;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\User;
use Hash;

class LoginController extends Controller

{
    public function authorization()
    {
        if (Auth::check()) {
            $users = Auth::user()->status;
            if ($users == "Подтвержденный") {
                return back();
            } else {
                return view('authorization.authorization');
            }
        } else {
            return view('authorization.authorization');
        }
    }

    public
    function registration(): View
    {
        return view('authorization.registration');
    }

    public
    function postLogin(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => false,
                "errors" => $validator->errors()
            ]);
        } else {

            $user = User::query()->firstWhere('email', $request->input('email'));
            if (!$user) {
                return response()->json([
                    "status" => false,
                    "errors" => ["Аккаунт не зарегистрирован"]
                ]);
            } else {
                if ($user->status !== 'Подтвержденный') {
                    return response()->json([
                        "status" => false,
                        "errors" => ["Аккаунт не подтвержден"]
                    ]);
                };
            }

            $user = User::query()->firstWhere('email', $request->input('email'));

            if ($user->post == 'Админ') {
                if (Auth::attempt($request->only(["email", "password"]))) {
                    return response()->json([
                        "status" => true,
                        "redirect" => url("admin/staff-admin")
                    ]);
                } else {
                    return response()->json([
                        "status" => false,
                        "errors" => ["Неверный логин или пароль"]
                    ]);
                }

            } elseif ($user->post == 'Менеджер') {
                if (Auth::attempt($request->only(["email", "password"]))) {
                    return response()->json([
                        "status" => true,
                        "redirect" => url("manager/staff-manager")
                    ]);
                } else {
                    return response()->json([
                        "status" => false,
                        "errors" => ["Неверный логин или пароль"]
                    ]);
                }

            } else {
                if (Auth::attempt($request->only(["email", "password"]))) {
                    return response()->json([
                        "status" => true,
                        "redirect" => url("engineer/staff-engineer")
                    ]);
                } else {
                    return response()->json([
                        "status" => false,
                        "errors" => ["Неверный логин или пароль"]
                    ]);
                }
            }
        }
    }

    public
    function postRegistration(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'surname' => 'required',
            'name' => 'required',
            'patronymic' => 'required',
            'email' => 'required|email|unique:users',
            'number' => 'required|min:7|max:30|unique:users',
            'post' => 'required',
            'password' => 'required|min:6',
            'again_password' => 'required|same:password|min:6',
        ]);

        if ($validator->fails()) {
            if (User::where('email', $_POST['email'])->exists()) {
                return response()->json([
                    "status" => false,
                    "errors" => ["Почта уже используется"]
                ]);
            }
            if (User::where('password', 'again_password')->exists()) {
                return response()->json([
                    "status" => false,
                    "errors" => ["Пароли не совпадают"]
                ]);
            }
            if (User::where('number', $_POST['number'])->exists()) {
                return response()->json([
                    "status" => false,
                    "errors" => ["Номер телефона уже используется"]
                ]);
            } else {
                return response()->json([
                    "status" => false,
                    "errors" => $validator->errors()
                ]);
            }
        }

        $data = $request->all();
        $user = $this->create($data);

        Auth::login($user);

        return response()->json([
            "status" => true,
            "redirect" => url("/")
        ]);
    }

    public
    function create(array $data)
    {
        $user = User::query()
            ->create([
                'surname' => $data['surname'],
                'name' => $data['name'],
                'patronymic' => $data['patronymic'],
                'email' => $data['email'],
                'number' => $data['number'],
                'post' => $data['post'],
                'password' => Hash::make($data['password'])
            ]);

        $status = new StatusUser();
        $status->fill([
            'users_id' => $user->id,
        ]);
        $status->save();

        return $user;
    }

    public
    function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }


}
