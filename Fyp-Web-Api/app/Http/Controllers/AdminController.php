<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use \Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function registerAdmin(Request $request)
    {
        $validateForm = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email', 
            'password' => 'required|min:4',
        ]);

        $validateForm['password'] = bcrypt($validateForm['password']); 
        $admin = Admin::create($validateForm);

        auth()->login($admin);

        return redirect('/home');
    }

    public function loginAdmin(Request $request)
{
    $validateForm = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::guard('admin')->attempt(['email' => $validateForm['email'], 'password' => $validateForm['password']])) {
        return redirect('/home')->with('success', 'Login successful');
    } else {
        return redirect()->back()->with('error', 'Invalid credentials');
    }
}


    public function logoutAdmin(){
        auth()->logout();
        return redirect('/login');
    }

}
