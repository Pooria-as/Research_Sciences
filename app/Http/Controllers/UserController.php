<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller
{
    public function __construct()
    {
        return $this->middleware("AdminAccess")->except("show");
    }


    public function index()
    {
        $users=User::all();
        return view("Dashboard.User.index",compact("users"));
    }

    public function create()
    {
        return view("Dashboard.User.create");
    }

    public function store(UserRequest $request)
    {
        User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "tell"=>$request->tell,
            "password"=>Hash::make($request->password)
        ]);
        Alert::success('موفق ✔', 'کاربر با موفقیت افزوده شد ');
        return redirect(route("user.index"));

    }


    public function show(User $user)
    {

        return view("Dashboard.User.show",compact("user"));
    }
}
