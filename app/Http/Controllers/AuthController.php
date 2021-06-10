<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function signUp(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'email' => 'required|string|email|unique:users',
                'password' => 'required|string'
            ]);

            if ($validator->fails()) {
                response()->json([
                    'created' => false,
                    'errors' => $validator->errors()->all()
                ], 400);
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            $role = [
                'user_id' => $user->id,
                'role' => 'basic'
            ];

            Role::create($role);

            return response()->json(['message' => 'Successfully created user!'], 201);
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            $role = [
                'user_id' => $user->id,
                'role' => 'basic'
            ];

            Role::create($role);

            return response()->json(['message' => 'Successfully created user!'], 201);
        } catch (\Exception $error) {
            return response()->json(['The email is already registered'], 409);
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        if ($validator->fails()) {
            response()->json([
                'created' => false,
                'errors'  => $validator->errors()->all()
            ], 400);
        }

        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials))
            return response()->json(['message' => 'Unauthorized'], 401);

        $user = $request->user();
        $userRole = $user->role()->first();

        if ($userRole) {
            $this->scope = $userRole->role;
        }

        $tokenResult = $user->createToken($user->email . ' - ' . now(), [$this->scope]);

        return response()->json([
            'access_token' => $tokenResult->accessToken,
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    public function getRole(Request $request)
    {
        $userLogged = $request->user()->id;
        $data = Role::where('user_id', $userLogged)->first();
        return response()->json($data, 200);
    }

    public function getUser(Request $request)
    {
        return $request->user();
    }
}
