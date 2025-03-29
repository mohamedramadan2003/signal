<?php

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Specialcourse;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CourseController;


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Socail\SocailLoginController;

Route::get('/search-departments', function (Request $request) {
    $query = $request->get('query');
    $departments = Department::where('name', 'LIKE', '%' . $query . '%')->get();

    return response()->json($departments);
});

Route::get('/dashboard', function () {
    return view('Home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/',[HomeController::class , 'index'])
->name('home.index');
Route::middleware('auth')->group(function () {
    Route::get('/course',[CourseController::class , 'index'])
->name('course.index');
Route::get('course/level/{id}',[ViewController::class , 'create'])
->name('course.level.create');
Route::get('course/department/{id}',[ViewController::class , 'index'])
->name('course.department.create');
Route::get('course/Specialcourse/{id}',[ViewController::class , 'special'])
->name('course.Specialcourse.view');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('auth/{provider}/redirect',[SocailLoginController::class , 'redirect'])
->name('auth.socilaite.redirect');
Route::get('auth/{provider}/callback',[SocailLoginController::class , 'callback'])
->name('auth.socilaite.callback');


require __DIR__.'/auth.php';
