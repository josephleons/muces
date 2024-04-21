<?php

use App\Models\Student;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeanController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\EvaluatorController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\EvaluationController;


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
// Home?
// Login view ?
Route::get('/',[LoginController::class,'index']);

// user auth?
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login']);


Route::get('/logout',[LogoutController::class,'logout']);

Route::get('delete/{id}',[UserController::class,'destroy']);
Route::get('delete/{id}',[AdminController::class,'destroy']);

Route::resource('users',UserController::class);
Route::get('account',[UserController::class,'account']);
Route::post('/users',[UserController::class,'store']);

Route::group(['middleware'=>'VerifyMiddleware'], function(){
//     // Route::view('posts',PostsController::class);
// Route::get('/', [AdminController::class, 'index'])->name('index');
});

// // profile
// Route::get('/profile',[UserController::class,'profile']);

// //add users
// Route::get('/add_user',[UserController::class,'create']);

// Admin
Route::prefix('admin')->middleware(['auth','is_admin'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index')->name('index');
    Route::get('/listEvaluator', [AdminController::class, 'listEvaluator'])->name('listEvaluator');
    Route::post('/listEvaluator', [UserController::class, 'store'])->name('store');
    Route::get('/managedepartments', [AdminController::class, 'managedepartments'])->name('managedepartments');
    Route::get('/managestudents', [AdminController::class, 'managestudents'])->name('managestudents');
    Route::get('/managequality', [AdminController::class, 'managequality'])->name('managequality');
    Route::post('/managestudents', [UserController::class, 'store'])->name('store');
    // Include resourceful routes for AdminController
    Route::resource('/', AdminController::class);
});



// Student 
Route::prefix('students')->middleware(['auth','is_student'])->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('students.index');
    Route::get('/student', [StudentController::class, 'student'])->name('student');
    // Route::get('/no_student', [StudentController::class, 'index'])->name('no_student');
    // custom route
    Route::get('/studentRegister', [StudentController::class, 'studentRegister']);
    Route::get('/questionnaire', [StudentController::class, 'Questionnaire']);
    Route::get('/create', [StudentController::class, 'create'])->name('students.create');
    Route::get('/show/{id}', [StudentController::class, 'show'])->name('students.show');
    Route::post('/show/{id}', [ResponseController::class, 'store'])->name('students.store');
    // Route::post('/QResponses', [StudentController::class, 'QResponses'])->name('students.QResponses');
    Route::post('/studentRegister', [StudentController::class, 'store']);
    Route::post('/', [StudentController::class, 'store']);
    // Include resourceful routes for AdminController
    Route::resource('students', StudentController::class);
});

// Evaluator 
Route::prefix('evaluators')->middleware('auth')->group(function () {
    // Route for accessing the index method of EvaluatorController
    Route::get('/', [EvaluatorController::class, 'index'])->name('evaluators.index');
    Route::get('/create', [EvaluatorController::class, 'create'])->name('create');
    // Route::post('/create', [EvaluatorController::class, 'store'])->name('store');
    Route::post('/store',[EvaluatorController::class,'store'])->name('evaluators.store');

    
    // Resourceful routes for EvaluatorController
    Route::resource('/', EvaluatorController::class);
});

// Courses 
Route::prefix('courses')->middleware('auth')->group(function () {
    Route::get('/', [CourseController::class, 'index'])->name('index');
    // Include resourceful routes for AdminController
    Route::resource('courses', CourseController::class);
});

// / programs 
Route::prefix('programs')->middleware(['auth'])->group(function () {
    Route::get('/', [ProgramController::class, 'index'])->name('index');
    Route::post('/', [ProgramController::class, 'store']);
    Route::get('/course_list', [ProgramController::class, 'store'])->name('programs.course_list');
    // Route::post('/course_list', [ProgramController::class, 'store'])->name('programs.course_list');
    // Route::get('/course_list', [ProgramController::class, 'course_list']);

    // Include resourceful routes for AdminController
    Route::resource('programs', ProgramController::class);
});


// / Tasks 
Route::prefix('tasks')->group(function () {
    Route::get('/', [TaskController::class, 'index'])->name('index');
    // Include resourceful routes for AdminController
    Route::resource('tasks', TaskController::class);
});

// / Responses 
Route::prefix('responses')->middleware(['auth','is_qassuarance','is_admin'])->group(function () {
    Route::get('/', [ResponseController::class, 'index'])->name('index');
    Route::post('/student/create', [ResponseController::class, 'store'])->name('store');
    // Include resourceful routes for AdminController
    Route::resource('responses', ResponseController::class);
});

// Evaluations 
Route::prefix('evaluations')->group(function () {
    Route::get('/', [EvaluationController::class, 'index'])->name('index');
    Route::get('/create', [EvaluationController::class, 'create'])->name('create');
    // Route::post('/create', [EvaluatorController::class, 'store'])->name('store');
    Route::post('/store',[EvaluationController::class,'store'])->name('evaluators.store');
    // Include resourceful routes for AdminController
    Route::resource('evaluations', EvaluationController::class);
});


// / Dean of Facult 
Route::prefix('dean')->middleware('auth')->group(function () {
    Route::get('/', [DeanController::class, 'index'])->name('index');
    // Include resourceful routes for AdminController
    Route::resource('tasks', DeanController::class);
});


// / Department of Facult 
Route::prefix('departments')->middleware('auth')->group(function () {
    Route::get('/', [DepartmentController::class, 'index'])->name('index');
    Route::post('/', [DepartmentController::class, 'store']);
    Route::get('/show/{id}', [DepartmentController::class, 'show']);
    Route::get('/edit/{id}', [DepartmentController::class, 'edit']);
    Route::put('/edit/{id}', [DepartmentController::class, 'update']);
    Route::resource('departments', DepartmentController::class);
});

Route::prefix('enroll')->middleware('auth')->group(function () {
    Route::resource('enroll', EnrollmentController::class);
    Route::get('/create', [EnrollmentController::class ,'create'])->name('create');
    Route::post('/create', [EnrollmentController::class ,'store'])->name('store');
    
});





