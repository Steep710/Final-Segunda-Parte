<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Redirect;

class UserController extends Controller
{
    public function index(){
      $users = User::all();
      return view('welcome', compact('users'));
    }

    public function store(Request $req){
        if ($req->imagen) {
            $ahora = Carbon::now();
            $fecha = $ahora->year . '-' . $ahora->month . '-' . $ahora->day . '-' .$ahora->hour . $ahora->minute . $ahora->second;
            $fileName = pathinfo($req->imagen->getClientOriginalName(), PATHINFO_FILENAME) . $fecha . '.' . $req->imagen->getClientOriginalExtension();
            $req->imagen->move('attachment', $fileName);
            User::create([
              'descripcion' => $req->descripcion,
              'imagen'      => 'attachment/' . $fileName,
              'created_at'  => $ahora,
            ]);
       }
       return Redirect::to("/");
    }
}
