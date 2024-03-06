<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    //
    public function register(Request $request)
    {
        //Validar los datos
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        $request->session()->flash('nombre', $user->name);
        return redirect(route('secret'));
    }
    public function login(Request $request)
    {

    }

    public function logout(Request $request)
    {

    }
}
