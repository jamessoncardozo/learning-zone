<?php

use Illuminate\Support\Facades\Route;

use App\http\Livewire\TestingComponents;
use App\Http\Livewire\TeamDashboard;
use App\Http\Livewire\UserDashboard;

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
  
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

    Route::get('/livewire/user-dashboard', UserDashboard::class)->name('userdash');

    Route::get('/livewire/team-dashboard', TeamDashboard::class)->name('teamdash');
});
