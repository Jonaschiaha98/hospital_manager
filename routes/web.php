<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\fallback;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    if (Auth::user()['name'] == 'admin') {
        return view('blog.admin.index');
    } else{
        return view('blog.user.index');
    } 
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('/blog')->group(function(){
    Route::get('/create', [PostController::class, 'create'])->name('blog.create');
    Route::get('/', [PostController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [PostController::class, 'show'])->name('blog.show');
    Route::post('/', [PostController::class, 'store'])->name('blog.store');
    Route::get('/edit/{id}', [PostController::class, 'edit'])->name('blog.edit');
    Route::patch('/{id}', [PostController::class, 'update'])->name('blog.update');
    Route::delete('/{id}', [PostController::class, 'destroy'])->name('blog.delete');

});


//Dcotor route
Route::get('/admin/create_doctor', [DoctorController::class, 'create'])->name('admin.create');



Route::get('/admin', [DoctorController::class, 'index'])->name('admin.index');
Route::get('/admin/appointment', [DoctorController::class, 'appointment'])->name('admin.appointment');
Route::get('/admin/doctor', [DoctorController::class, 'doctor'])->name('admin.doctor');
Route::post('/admin', [DoctorController::class, 'store'])->name('admin.store');

Route::get('/admin/{id}', [DoctorController::class, 'show'])->name('admin.show');
Route::get('/admin/{id}/edit', [DoctorController::class, 'edit'])->name('admin.edit');
Route::patch('/admin/{id}', [DoctorController::class, 'update'])->name('admin.update');
Route::get('/admin/{id}', [DoctorController::class, 'destroy'])->name('admin.delete');

Route::get('/admin/test/create', [TestimonyController::class, 'create'])->name('admin.create_testimony');
Route::get('/admin/testimony/hos', [TestimonyController::class, 'index'])->name('admin.testimony');
Route::post('/admins', [TestimonyController::class, 'store'])->name('store.testimony');

Route::get('/admin/team/create', [TeamController::class, 'create'])->name('team.create');
Route::get('/admin/team/list', [TeamController::class, 'index'])->name('team.index');
Route::post('/adminss', [TeamController::class, 'store'])->name('team.store');

Route::fallback(fallback::class);