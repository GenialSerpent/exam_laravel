<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

Route::get('/', function () {
    return 'welcome';
});
Route::get('/photo', [PhotoController::class, 'create']);
Route::get('/photo/edit/{id}', [PhotoController::class, 'edit']);
