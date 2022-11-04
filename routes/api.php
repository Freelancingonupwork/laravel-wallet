<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\WalletController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Register User
 * endpoint: http://{domain}/api/auth/register
 * returns Bearer Token
 */
Route::post('/auth/register', [AuthController::class, 'createUser']);

/**
 * Login User
 * endpoint: http://{domain}/api/auth/login
 * returns Bearer Token
 */
Route::post('/auth/login', [AuthController::class, 'loginUser']);

/**
 * Add Amount to Wallet
 * endpoint: http://{domain}/api/wallet/add
 * returns message and current balance
 */
Route::post('/wallet/add',[WalletController::class,'Add'])->middleware('auth:sanctum');

/**
 * Wallet Pay
 * endpoint: http://{domain}/api/wallet/pay
 * returns message and current balance
 */
Route::post('/wallet/pay',[WalletController::class,'Pay'])->middleware('auth:sanctum');
