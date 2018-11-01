<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Request\UserRequest;

class UserController extends Controller
{
	public function urlUser(){

		$user = User::find(Auth::id());


		return view('user.index')->with([
			'user' => $user
		]);

	}

	public function urlAdmin(){

		$users = User::all();

		return view('admin.index')->with([
			'users' => $users
		]);
	}

	public function edit($id){

        $user = User::find($id);

        return $user;

    }

    public function update($id, Request $request){


        try {
            
            \DB::beginTransaction();

            User::find($id)->fill($request->all())->save();

            \DB::commit();
            return'Usuario actualizado exitosamente';

        } catch (\Exception $e) {            

            \DB::roolBack();

            return'Error al acutalizar. Intenta nuevamente';

        }

    }


}
