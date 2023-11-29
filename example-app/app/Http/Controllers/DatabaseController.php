<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DatabaseController extends Controller
{
    public function show(): View {
        DB::table('users')->delete();
        DB::table('users')->insert([
            'name' => 'maxim',
            'email' => 'maxmsavv@gmail.com',
            'password' => 'password',
        ]);
        $user = DB::table('users')->where('name', 'maxim')->first();
        $name = $user->name;
        $email = $user->email;
        $password = $user->password;
        return view('table', ['name' => $name, 'email' => $email, 'password' => $password]);
    }
}
