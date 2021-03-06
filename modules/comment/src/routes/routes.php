<?php


use Illuminate\Support\Facades\Route;
use Comment\Http\Controllers\CommentController;


Route::POST('/comment/create', [CommentController::class, 'store']);
Route::GET('/comments', [CommentController::class, 'index']);
Route::PUT('/comment/{comment}/update', [CommentController::class, 'update']);
Route::DELETE('/comment/{comment}/delete', [CommentController::class, 'delete']);
Route::GET('/comments/user', [CommentController::class, 'userComment']);