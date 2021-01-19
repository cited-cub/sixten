<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
//        $data = [
//            'name' => 'Elon',
//            'email' => 'elon@bitfumes.com',
//            'password' => 'password'
//        ];
//        \App\Models\User::create($data);
        $user = \App\Models\User::all();
        return $user;

//        $user = new \App\Models\User();
//        $user->name = 'sarthak';
//        $user->email = 'sarthak@bitfumes.com';
//        $user->password = bcrypt('password');
//        $user->save();

//        $user = \App\Models\User::all();
//        return $user;

//        \App\Models\User::where('id', 2)->delete();

//        \App\Models\User::where('id', 9)->update(['name' => 'bitfumesssss']);
//        $user = \App\Models\User::all()->where('id', 9);
//        return $user;

//        DB::insert('insert into users (name, email, password)
//values (?,?,?)', ['sarthak', 'sarthak@bitfumes.com', 'password']);
        //$users = DB::select('select * from users');
        //DB::update('update users set name = ? where id = 1', ['bitfumes']);

//        DB::delete('delete from users where id = 1');

//        $users = DB::select('select * from users');
        return view('home');
    }
}
