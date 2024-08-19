<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function logout()
    {
        Auth::logout();
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('email', $request->email);
        $this->validate($request,[
            'email' => 'required|min:10',
            'password' => 'required|min:3|max:12',
        ]);
        
        $success = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if (! $success) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        session()->regenerate();

        return redirect()->intended('/buku');
    }

    /**
     * Display the specified resource.
     */
    public function register()
    {
        return view('auth.register');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function create(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->name);

        $data = [
            'name' => $request->name,
            'email'=> $request->email,
            'password'=> Hash::make ($request->paassword)
        ];
        
        User::create($data);
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return view('auth.login     ')-> with ('succes', 'berhasil login');
        } else {
            return view('auth.login')->with('username dan password salah');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
