<?php

namespace App\Http\Controllers;

use App\Models\StatusUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkUserRole:Менеджер');

    }

    public function staff()
    {
        if (Auth::check()) {
            $users = User::query()
                ->whereHas('stat')
                ->limit(11)
                ->offset(0)
                ->get();

            return view('manager/staff-manager', ['users' => $users]);

        }

        return redirect("/")->withSuccess('У вас нет доступа');
    }

    public function project()
    {
        if (Auth::check()) {

            return view('manager/project-manager');

        }

        return redirect("/")->withSuccess('У вас нет доступа');
    }

    public function editStaff(Request $request, $user_id)
    {
        $user = User::query()->find($user_id);

        StatusUser::query()->where('users_id', $user->id)->update(['status' => $request->status]);

        $input = $request->all();

        $user->fill($input)->save();

        return redirect('manager/staff-manager');
    }

    public function setting()
    {
        if (Auth::check()) {

            $users = Auth::user();

            return view('manager/setting-manager', ['users' => $users]);

        }
        return redirect('/');
    }
}
