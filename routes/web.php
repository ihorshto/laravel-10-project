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

Route::resource('hetmans', HetmansController::class);


Route::get('/hetmans', [HetmansController::class, 'index']);

Route::get('hetmans/{id}', [HetmansController::class, 'show'])->name('hetmans.show');


Route::get('/hetmans/create', [HetmansController::class, 'create']);




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

// require __DIR__.'/auth.php';
