<?php            
use App\Http\Controllers\TodolistFormController;

Route::get('/todolist', [TodolistFormController::class, 'index']);
Route::get('/todo_create', [TodolistFormController::class, 'createPage']);
Route::post('/todo_create', [TodolistFormController::class, 'create']);
Route::get('/todo_edit/{id}', [TodolistFormController::class, 'editPage']);
Route::post('/edit', [TodolistFormController::class, 'edit']);
Route::delete('/delete/{id}', [TodolistFormController::class, 'delete']);
