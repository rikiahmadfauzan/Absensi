<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserContoller extends Controller
{
    function show(){
        $data['user'] = User::all();
        return view('user.user', $data);
    }
    function create(Request $req){
        User::create([
             'id' => $req->id,
             'nama' => $req->nama,
             'nik' => $req->nama,
             'fotoGuru' => $req->file('fotoGuru')->store('fotoGuru')

         ]);
         return redirect('/user');
      }
}
