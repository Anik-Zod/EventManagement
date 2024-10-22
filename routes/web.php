<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('login');
});

Route::get('/register', [UserController::class, 'create']);

Route::post('/createuser', [UserController::class, 'createuser']);

Route::get('/dashboard', function () { return view('dashboard');});

Route::post('/login', [UserController::class, 'login']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/create-event', [EventController::class, 'create']);

Route::post('/create-event', [EventController::class, 'addevent']);

Route::get('/all-events', [EventController::class, 'listallevents']);

Route::get('/events/{id}', function ($id) {
    return response($id);
});

Route::get('/tasks', function (Request $request) {
    return $request->name . ' ' . $request->id;
});



