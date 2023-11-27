<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EngineerController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkUserRole:ИТР');
    }

    public function staff()
    {
        if (Auth::check()) {
            $users = User::query()
                ->whereHas('stat')
                ->limit(11)
                ->offset(0)
                ->get();

            return view('engineer/staff-engineer', ['users' => $users]);

        }

        return redirect("/")->withSuccess('У вас нет доступа');
    }

    public function project()
    {
        if (Auth::check()) {

            return view('engineer/project-engineer');

        }

        return redirect("/")->withSuccess('У вас нет доступа');
    }

    public function setting()
    {
        if (Auth::check()) {

            $users = Auth::user();

            return view('engineer/setting-engineer', ['users' => $users]);

        }
        return redirect('/');
    }
}
