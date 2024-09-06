<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('users.register');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            //ROLE DEFINITION
            // 1 => Super admin
            // 2 => Admin
            // 3 => Customer

            $user = User::query()->create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => '3',  //Customer
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Registered successfully, please proceed to login.',
            ], 201);

        } catch (\Illuminate\Validation\ValidationException $e) {
            $errors = $e->validator->errors()->getMessages();
            $firstError = array_shift($errors)[0];
            return response()->json([
                'status' => 'error',
                'message' => $firstError
            ], 400);
        }
    }
}
