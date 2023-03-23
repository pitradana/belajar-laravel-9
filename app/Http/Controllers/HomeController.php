<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function update_password()
    {
        $user = Auth::user();
        return view('update_password', compact('user'));
    }

    public function store_password(Request $request)
    {
        $request->validate([
            'new_password' => 'required|min:8|confirmed'
        ]);

        // User::whereId(auth()->user()->id)->update([
        //     'password' => Hash::make($request->new_password)
        // ]);

        Auth::user()->update([
            'password' => Hash::make($request->new_password)
        ]);

        $request->session()->flash('message', 'Password berhasil diubah');

        return Redirect::back();
    }
}
