<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

use App\User;


class AuthController extends Controller
{
    public function login(LoginRequest $request){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password'), 'active' => true])){
            $user = Auth::user();
            return response()->json([
                'access_token' => $user->accessToken(),
                'token_type' => 'Bearer',
                'message' => trans('messages.user.login.success')
            ], 200);
        } else {
            return response()->json(["errors" => [trans('messages.user.login.fail')]], 412);
        }
    }

    public function logout()
    {
        if(request()->user()->token()->revoke()){
            return response()->json(["message" => trans('messages.user.logout.success')], 200);
        } else {
            return response()->json(["errors" => [trans('messages.user.logout.fail')]], 200);
        }
    }
}
