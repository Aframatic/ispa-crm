<?php

namespace App\Http\Controllers;

use App\Models\StatusUser;
use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\CommentProject;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkUserRole:Админ');

    }

    public function staff()
    {
        if (Auth::check()) {
            $users = User::query()
                ->whereHas('stat')
                ->paginate(11);

            return view('admin/staff-admin', ['users' => $users], compact('users'));

        }

        return redirect("/")->withSuccess('У вас нет доступа');
    }

    public function project()
    {
        if (Auth::check()) {
            $project = Project::query()
                ->paginate(11);

            return view('admin/project-admin', ['project' => $project], compact('project'));

        }

        return redirect("/")->withSuccess('У вас нет доступа');
    }

    public function commentProject(Request $request, $project_id)
    {
        if (Auth::check()) {
            $project = Project::query()->find($project_id);

            CommentProject::query()->where('project_id', $project->id)->update(['comment' => $request->commentsProject]);

            $input = $request->all();
            $project->fill($input)->save();

            return redirect('admin/project-admin');

        }

        return redirect("/")->withSuccess('У вас нет доступа');
    }

    public function editProject(Request $request, $project_id)
    {
        if (Auth::check()) {
            $project = Project::query()->find($project_id);

            CommentProject::query()->where('project_id', $project->id)->update(['comment' => $request->commentProject]);
            Project::query()->where('id', $project->id)->update([
                'name' => $request->nameProject,
                'data_start' => $request->dataStartProject,
                'data_end' => $request->dataEndProject,
                'status' => $request->statusProject
            ]);


            $input = $request->all();
            $project->fill($input)->save();

            return redirect('admin/project-admin');
        }

        return redirect("/")->withSuccess('У вас нет доступа');
    }

    public function addProject()
    {
        if (Auth::check()) {


            return redirect('admin/project-admin');
        }

        return redirect("/")->withSuccess('У вас нет доступа');
    }



//
//    public function deleteProject(Request $request, $id_user)
//    {
//        $user = User::query()->find($id_user);
//
//        $now = date('Y-m-d H:i:s');
//
//        User::query()->where('id', $user->id)->update(['deleted_at' => $now]);
//
//        $input = $request->all();
//
//        $user->fill($input)->save();
//
//        return redirect('admin/staff-admin');
//    }


    public function editStaff(Request $request, $user_id)
    {
        $user = User::query()->find($user_id);

        StatusUser::query()->where('users_id', $user->id)->update(['status' => $request->status]);

        $input = $request->all();

        $user->fill($input)->save();

        return redirect('admin/staff-admin');
    }

    public function deleteStaff(Request $request, $id_user)
    {
        $user = User::query()->find($id_user);

        $now = date('Y-m-d H:i:s');

        User::query()->where('id', $user->id)->update(['deleted_at' => $now]);

        $input = $request->all();

        $user->fill($input)->save();

        return redirect('admin/staff-admin');
    }

    public function setting()
    {
        if (Auth::check()) {

            $users = Auth::user();
            return view('admin/setting-admin', ['users' => $users]);
        }
        return redirect('/');
    }

}
