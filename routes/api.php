<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/tokens/yaratish', function () {
    $user = User::query()->create([
        'name'  => 'Hikmatulloh',
        'email' => 'hikmatulloh@gmail.com',
        'password' => Hash::make('hikmatulloh'),
    ]);

    $token = $user->createToken('hikmatulloh')->plainTextToken;

    return response()->json(['token' => $token]);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


/*
 *
 * TODO
 *  1. Install api
 *  2. Create route to create user
 *  3. Generate token for that user and return as a response
 *  4. Call api route with token (get current user)
 *
 */
