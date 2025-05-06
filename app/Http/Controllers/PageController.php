<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required|min:3',
            'password' => 'required'
        ]);

        return redirect()->route('dashboard', [
            'username' => $request->username
        ]);
    }

    public function dashboard(Request $request)
    {
        return view('dashboard', [
            'username' => $request->query('username')
        ]);
    }

    public function pengelolaan(Request $request)
    {
        $tasks = [
            ['name' => 'PWEB','isi' => 'Membuat Web', 'deadline' => '6 Mei 2025', ],
            ['name' => 'MPTI','isi' => 'Membuat Dokumen MPTI', 'deadline' => '19 Mei 2025',],
            ['name' => 'PPL','isi' => 'Membuat SPRINT 2', 'deadline' => '15 Mei 2025',],
        ];
        return view('pengelolaan',[
            'tasks' => $tasks,
            'username' => $request->query('username')
        ]);
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', [
            'username' => $username,
            'password' => '*****',
            'nama' => 'Novia'
        ]);
    }
}
