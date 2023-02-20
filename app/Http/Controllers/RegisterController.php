<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);

    }
    public function store(Request $request)
    {
        // return request()->all();  
        // untuk melihat data sementera yang dikirmkan
        $validatedData = $request->validate([
            'name'=> 'required|max:225',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'

        ]);
        // $validatedData['password'] = bcrypt($validatedData['password']);
            $validatedData['password'] = Hash::make($validatedData['password']);
        // dd('berhasil'); untuk mengecek ketika data berhasil masuk
        User::create($validatedData);

        // $request->session()->flash('success','Registrasi Berhasil Silahkan Login'); tanpa width
        return redirect('/login')->with('success','Registrasi Berhasil Silahkan Login');
     }
}


