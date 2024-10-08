<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('posts', [PostController::class, 'index']);  // Get all posts
Route::post('posts', [PostController::class, 'store']);  // Create a post
Route::get('posts/{id}', [PostController::class, 'show']);  // Get a single post
Route::put('posts/{id}', [PostController::class, 'update']);  // Update a post
Route::delete('posts/{id}', [PostController::class, 'destroy']);  // Delete a post

Route::post('posts/{post}/comments', [CommentController::class, 'store']);  // Add a comment to a post
Route::delete('comments/{id}', [CommentController::class, 'destroy']);  // Delete a comment
