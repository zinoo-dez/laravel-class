<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/welcome", function () {
    return view('welcome');
});
Route::get("/", [HomeController::class, 'home'])->name('home');
Route::get("/about", [HomeController::class, 'about'])->name("about");
Route::get("/project", [HomeController::class, 'project'])->name('project');


Route::get("/users", [UserController::class, "index"])->name('users.index');
Route::get("/users/create", [UserController::class, "create"])->name('users.create');
Route::post("/users", [UserController::class, "store"])->name('users.store');
Route::get("/users/{show}", [UserController::class, "show"])->name('users.show');
Route::get("/users/{show}/edit", [UserController::class, "edit"])->name('users.edit');
Route::patch("/users/{show}", [UserController::class, "update"])->name('users.update');
Route::delete("/users/{show}", [UserController::class, "destory"])->name('users.destory');












// Route::get('/user/{id}', function (string $id) {
//     // $users = ['bobo', "mgmg", 'nono'];
//     return "user " . $id;
// });
// Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {
//     return "Post id $postId is realted commentid $commentId";
// });

// Route::get('/user/{name?}', function (string $name = null) {
//     return $name;
// });

// Route::get('/user/{name?}', function (string $name = 'John') {
//     return $name;
// });

// Route::get('/user/{name}', function (string $name) {
//     return $name;
// })->where('name', '[A-Za-z]+');

// Route::get('/user/{id}', function (string $id) {
//     return $id;
// })->where('id', '[0-9]+');

// Route::get('/user/{id}/{name}', function (string $id, string $name) {
//     return $name . $id;
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


// Route::get("/", function () {
//     return view('home');
// })->name("home");
// Route::get("/about", function () {
//     return view('about');
// })->name('about');
// Route::get("/project", function () {
//     return view('project');
// })->name('project');
// Route::get('/', function () {
//     $users = ['bobo', "mgmg", 'nono'];
//     $data = [
//         ["name" => "bobo", "age" => 20, "gender" => "male"],
//         ["name" => "mgmg", "age" => 24, "gender" => "male"],
//         ["name" => "nono", "age" => 23, "gender" => "female"],
//         ["name" => "rose", "age" => 25, "gender" => "female"],
//     ];
//     return view('welcome', [
//         "users" => $users,
//         "data" => $data
//     ]);
// });
// Route::prefix("admin")->name("admin.")->group(function () {
//     Route::get("/aaa", function () {
//         return "aaa";
//     });
// })->name("a");
