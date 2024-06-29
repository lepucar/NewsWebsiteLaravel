<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use League\Flysystem\UnableToDeleteFile;

class UserController extends Controller
{
    public function index()
    {
        
        $userData = User::all();
        return view('backend.pages.user.index', compact('userData'));
        
    }

    public function create()
    {
        
        return view('backend.pages.user.adduser');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' =>'required|unique:users|min:3|max:255',
            'password' => 'required|min:6|max:255',
            'gender' => 'required',
            'role' => 'required',

        ]);

        
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . $file->getClientOriginalName();
            $file->move(public_path('uploads/users/'), $fileName);
            $validatedData['image'] = "/uploads/users/" . $fileName;
        }        
        User::create($validatedData);
        
        return redirect()->route('users')->with('success', 'User created successfully');
    }

    public function delete($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('users')->with('success', 'User deleted successfully');
    }

    public function edit($id)
    {
        
        $user = User::where('id', $id)->first();
        return view('backend.pages.user.edituser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'password' => 'required|min:6|max:255',
            'gender' => 'required',
            'role' => 'required',

        ]);

        
       
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('uploads/users/'), $fileName);
            $validatedData['image'] = "/uploads/users/" . $fileName;
        }        


        
        
        unset($validatedData['_token']);
        User::where('id', $id)->update($validatedData);
        return redirect()->route('users')->with('success', 'User updated successfully');
    }
}
