<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return response()->json([
//         'message' => 'Ruta protegida accesible',
//         'user' => $request->user()
//     ]);
    
// });


Route::post('/user', [UserController::class, 'create']);    