<?php

use App\Http\Controllers\HetmansController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('home');
});

Route::resource('hetmans', HetmansController::class);

// Route::get('/hetmans', [HetmansController::class, 'index'])->name('hetmans.index');
// Route::get('hetmans/{id}', [HetmansController::class, 'show'])->name('hetmans.show')->where('id', '[0-9]+');
// Route::get('/hetmans/create', [HetmansController::class, 'create'])->name('hetmans.create');

// Route::post('hetmans', [HetmansController::class, 'store'])->name('hetmans.store');

// Route::delete('hetmans/{id}', [HetmansController::class, 'destroy'])->name('hetmans.destroy');

// Route::get('hetmans/{hetman}/edit', [HetmansController::class, 'edit'])->name('hetmans.edit');
// Route::put('hetmans/{hetman}', [HetmansController::class, 'update'])->name('hetmans.update');

Route::controller(HetmansController::class)->group(function () {
    Route::get('/hetmans', 'index')->name('hetmans.index');
    Route::get('hetmans/{id}', 'show')->name('hetmans.show');
    Route::get('/hetmans/create', 'create')->name('hetmans.create');

    Route::post('hetmans', 'store')->name('hetmans.store');

    Route::delete('hetmans/{id}', 'destroy')->name('hetmans.destroy');

    Route::get('hetmans/{id}/edit', 'edit')->name('hetmans.edit');
    Route::put('hetmans/{id}/update', 'update')->name('hetmans.update');

});


//
// Route::post('hetmans/{id}', [HetmansController::class, 'update'])->name('hetmans.update');


// old routes
// Route::get('/', function () {
//     // return view('welcome');

//     // $users = DB::select('select * from users');

//     $user = DB::table('users')->where('id', 1)->first();

//     // create new user
//     //  $user = DB::insert('insert into users (name, email, password, new_column) values(?,?,?,?)', ['Tapuc', 'tupac1.shevchenko@gmail.com', 'password', 'nothing']);
//     // $user = DB::table('users')->insert([
//     //     'name'=> 'Ihor',
//     //     'email'=> 'ihor@gmail.com',
//     //     'password'=> 'password',
//     // ]);

//     // update a user
//     // $user = DB::update("update users set email=? where id=?", [
//     // 'tarasuk.shevchenko@gmail.com',
//     //  2
//     // ]);

//     // delete a user
//     // $user = DB::delete('delete from users where id=?', [4]);

//     // dd($users);

//     //  $user = DB::table('users')->where('name', 'ihor@gmail.com')->update([
//     //     'name' => 'Ivan',
//     //     'email' => 'ivan.mazepa@gmail.com'
//     // ]);

//     //  $user = DB::table('users')->where('id', 2)->delete();


//      dd($user);

// });

// Route::get('/users', function () {
//     $user = DB::table('users')->get();

//     dd($user);
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
