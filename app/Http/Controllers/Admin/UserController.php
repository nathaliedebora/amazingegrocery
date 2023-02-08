<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.account-maintenance', compact('users'));
    }

    public function create($id)
    {
        $user = User::find($id);
        $roles = Role::all();

        return view('admin.update-role', compact('user', 'roles'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'account_id' => ['required', 'exists:users'],
            'role_id' => ['required', 'exists:roles']
        ]);

        $user = User::find($request->account_id);
        $user->role_id = $request->role_id;
        $user->save();

        return redirect('admin/account-maintenance');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('admin/account-maintenance');
    }
}
