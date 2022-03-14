<?php

use App\Http\Controllers\FieldController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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

Route::prefix('سامانه')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('System');
        Route::get('/مقاطع-تحصیلی', [GradeController::class, 'index'])->name(
            'grade.index'
        );
        Route::post('/مقاطع-تحصیلی', [GradeController::class, 'store'])->name(
            'grade.store'
        );
        Route::get('/مقاطع-تحصیلی/{grade:name}', [
            GradeController::class,
            'edit',
        ])->name('grade.edit');
        Route::put('/مقاطع-تحصیلی/{grade}', [
            GradeController::class,
            'update',
        ])->name('grade.update');
        Route::delete('/مقاطع-تحصیلی/{grade:name}', [
            GradeController::class,
            'destroy',
        ])->name('grade.destroy');
        //fileds
        Route::get('/رشته-تحصیلی', [FieldController::class, 'index'])->name(
            'field.index'
        );
        Route::get('/رشته-تحصیلی/افزودن', [
            FieldController::class,
            'create',
        ])->name('field.create');

        Route::get('/رشته-تحصیلی/{field:name}', [
            FieldController::class,
            'edit',
        ])->name('field.edit');

        Route::post('/مقاطع-تحصیلی/افزودن', [
            FieldController::class,
            'store',
        ])->name('field.store');

        Route::put('/رشته-تحصیلی/{field:name}', [
            FieldController::class,
            'update',
        ])->name('field.update');

        Route::delete('/رشته-تحصیلی/{field:name}', [
            FieldController::class,
            'destroy',
        ])->name('field.destroy');

        //users
        Route::get('/ادمین-اطلاعات', [UserController::class, 'index'])->name(
            'user.index'
        );
        Route::get('/ادمین-اطلاعات/افزودن', [
            UserController::class,
            'create',
        ])->name('user.create');

        Route::get('/ادمین-اطلاعات/{user:name}', [
            UserController::class,
            'show',
        ])->name('user.show');

        Route::post('/ادمین-اطلاعات/افزودن', [
            UserController::class,
            'store',
        ])->name('user.store');

        //students
        Route::get('/دانشجو', [StudentController::class, 'index'])->name(
            'student.index'
        );
        Route::get('/دانشجو/{student:national_code}', [
            StudentController::class,
            'show',
        ])->name('student.show');

        Route::get('/افزودن/دانشجو', [
            StudentController::class,
            'create',
        ])->name('student.create');

        Route::post('/دانشجو/افزودن', [
            StudentController::class,
            'store',
        ])->name('student.store');

        Route::delete('{student}/دانشجو/حذف', [
            StudentController::class,
            'destroy',
        ])->name('student.destroy');

        Route::get('{student:national_code}/دانشجو/ویرایش', [
            StudentController::class,
            'edit',
        ])->name('student.edit');

        Route::put('{student:national_code}/دانشجو/ویرایش', [
            StudentController::class,
            'update',
        ])->name('student.update');
    });

Auth::routes();

// Route::get('/home', [
//     App\Http\Controllers\HomeController::class,
//     'index',
// ])->name('home');
