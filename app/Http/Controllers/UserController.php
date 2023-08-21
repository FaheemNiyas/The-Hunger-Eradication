<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('edit_user')->with(['users' => $users]);
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect->route('create.user');
    }
}