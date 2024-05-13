<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    public function register(Request $request)
    {
        //Validar los datos
        $user = new User();

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return ['status' => 1, 'error' => 'Some field is not filled'];
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        try {
            Log::info(true == $user->save());
        } catch (\Exception $e) {
            return ['status' => 1, 'error' => 'Error saving registers'];
        }

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
