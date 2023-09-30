<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function loginCheck(LoginRequest $request)
    {
        try {

            $adminUser = Admin::where('email', $request->email)->orWhere('phone_number', '=', $request->email)->where('status', 'YES')->first();

            if (!empty($adminUser)) {
                if (Hash::check($request->password, $adminUser->password)) {

                    $user_data = [
                        "id"       => $adminUser->id,
                        "name"     => $adminUser->name,
                        "role_id"  => $adminUser->role_id,
                        "email"    => $adminUser->email,
                    ];

                    session()->put('logged_session_data', $user_data);
                    return redirect()->intended(url('/dashboard'));
                } else {
                    return redirect(url('/admin-login'))->withInput()->with('error', 'Wrong password');
                }
            } else {
                return redirect(url('/admin-login'))->withInput()->with('error', 'Please give the valid information');
            }
        } catch (\Throwable $th) {
            return redirect(url('/admin-login'))->with('error',  $th->getMessage());
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect(url('/admin-login'))->with('success', 'logout successful ..!');
    }
}
