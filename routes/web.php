<?php                                                                                                              
use App\Http\Controllers\TodolistFormController;

Route::get('/todolist', [TodolistFormController::class, 'index']);
Route::get('/todo_create', [TodolistFormController::class, 'createPage']);
Route::post('/todo_create', [TodolistFormController::class, 'create']);

