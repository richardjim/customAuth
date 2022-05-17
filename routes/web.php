<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\HomeController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\createnotificationController;
use App\Http\Controllers\ShownotificationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('register', [RegisterController::class, 'register']);
Route::post('register', [RegisterController::class, 'store'])->name('register');
Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () { return view('test'); });



Route::get('forget-password', [ForgotPasswordController::class, 'getEmail']);
Route::post('forget-password', [ForgotPasswordController::class, 'postEmail']);



Route::get('login', [LoginController::class, 'login']);
Route::post('login', [LoginController::class, 'store'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('home', [HomeController::class, 'home'])->name('home');

Route::get('reset-password/{token}', [ResetPasswordController::class, 'getPassword']);
Route::post('reset-password', [ResetPasswordController::class, 'updatePassword']);
Route::get('index', [CampaignController::class,'index'])->name('index');
// Route::resource('campaign', CampaignController::class);

    // Route::post('store',[CampaignController::class, 'store'])->name('store');
    
    Route::post('campaign/update',[CampaignController::class, 'update'])->name('campaign.update');
    Route::delete('campaign/delete',[CampaignController::class, 'delete'])->name('campaign.delete');
   
Route::post('/campaigncreate', [CampaignController::class, 'create'])->name('campaign.create');

Route::get('notificationcreate/{Id}', [createnotificationController::class, 'index'])->name('createnotification.index');


Route::get('campaign/{Id}', [DetailController::class, 'index'])->name('detail.index');
Route::get('notification', [NotificationController::class, 'index'])->name('notification.index');
Route::post('notification', [NotificationController::class, 'create'])->name('notification.create');
Route::post('notifications/update', [NotificationController::class, 'update'])->name('notification.update');
Route::get('notification/{Id}', [ShownotificationController::class, 'index'])->name('shownotification.index');



