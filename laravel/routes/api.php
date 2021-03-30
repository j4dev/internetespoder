<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource("crud","App\Http\Controllers\UserController");
Route::get("join","App\Http\Controllers\UserController@joinTables");