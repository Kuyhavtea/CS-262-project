<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserContoller extends Controller
{
    public function userTable()
    {
        $users = User::all();
        return view('usermanagement/index', ['users' => $users]);
    }

    public function addUser(Request $request)
    {
        // Validate the incoming request data
        $validateForm = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|unique:users,phone_number|max:15',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Encrypt the password before storing
        $validateForm['password'] = bcrypt($validateForm['password']);

        // Create a new user with the validated data
        $user = User::create($validateForm);

        // Redirect back to the home page with a success message
        return redirect('/home')->with('success', 'User added successfully');
    }

    public function editUser(Request $request, User $user)
    {
        $editForm = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone_number' => 'required|string|max:15|unique:users,phone_number,' . $user->id,
        ]);

        $user->update($editForm);

        return redirect()->back()->with('success', 'User updated successfully');
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect('/home')->with('success', 'User deleted successfully');
    }


}
