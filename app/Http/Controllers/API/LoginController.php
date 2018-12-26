<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Handles Login Request for API
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     *
     * @bodyParam email string required Email address of the user Example: pm@mailinator.com
     * @bodyParam password string required Email address of the user Example: 123456
     */
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
 
        if (auth()->attempt($credentials)) {
            $token = auth()->user()->createToken($request->email)->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Un Authorised'], 401);
        }
    }

    /**
     * Handles Registration Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     *
     * @bodyParam Name string required Email address of the user Example: API User
     * @bodyParam email string required Email address of the user Example: user@mailinator.com
     * @bodyParam password string required Email address of the user Example: 123456
     */
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
 
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
 
        $token = $user->createToken($request->email)->accessToken;
 
        return response()->json(['token' => $token], 200);
    }
}
