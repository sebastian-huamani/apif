<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Passport;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return response()->json([
        'message' => 'Ruta protegida accesible',
        'user' => $request->user()
    ]);
});