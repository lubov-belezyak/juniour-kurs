<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthFrontController extends Controller
{
    public function loginPage(Request $request) {
        return view('users.login');

    }

    public function regPage(Request $request) {
        return view('users.register');

    }

    public function registerUser(Request $request) {
          $validated = $request -> validate([
              'form.email' => 'required|email',
              'form.name' => 'required',
               'form.password' => 'required|alpha_dash|min:6',
          ]);

          $validated['form']['password'] =password_hash($validated ['form']['password'], PASSWORD_DEFAULT);

          $new_user = new User();
          $new_user -> fill($validated['form']) -> save();

          return redirect() -> route('login.get');
    }

    public function loginUser(Request $request) {
        $validated = $request -> validate([
         'email' => 'required|email',
         'password' => 'required|alpha_dash|min:6',
        ]);

        $user = User::where('email', $validated['email']) -> first();

        if ($user) {
            if (password_verify($validated['password'], $user ->password)){
                Auth::login($user);
                return redirect() -> route('index');
            }
        }
        return redirect() -> route('login.get');
    }

}
