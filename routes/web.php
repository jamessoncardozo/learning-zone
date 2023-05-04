<?php

use Illuminate\Support\Facades\Route;
use app\Exports\UsersExport;
use App\Http\Livewire\BusinessCard;
use App\Http\Livewire\BusinessProfile;
use App\Http\Livewire\BusinessImage;
use App\Http\Livewire\TeamDashboard;
use App\Http\Livewire\UserDashboard;
use App\Mail\OrderShipped;
use App\Models\User;

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

Route::get('/', function () {
  return view('welcome');
});

Route::get('/livewire/business-profile', BusinessProfile::class)->name('business-profile');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
  
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

    Route::get('/admin', function () {return view('admin');})->name('admin');

    Route::get('/livewire/user-dashboard', UserDashboard::class)->name('userdash');

    Route::get('/livewire/business-card/{id}', BusinessCard::class)->name('business-card');

    Route::get('/livewire/business-image/{id}', BusinessImage::class)->name('business-image');

    Route::get('/livewire/team-dashboard', TeamDashboard::class)->name('teamdash');
});
