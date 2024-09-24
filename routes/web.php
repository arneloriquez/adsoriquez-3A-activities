<?php
use App\Models\student;
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
    return view('welcome');
});

Route::get('/student/create', function(){
    $student = new student();
    $student->first_name = 'John';
    $student->last_name = 'Doe';
    $student->email = 'johndoe@example.com';
    $student->age=22;
    $student->save();
    return 'Student Created!!!';
});

Route::get('/student', function(){
    $students = Student::all();
    return $students;
});

Route::get('/student/update', function(){
    $student = Student::where('email', 'johndoe@example.com')->first();
    $student->email = 'john.doe@newemail.com';
    $student->age = 23;
    $student->save();
    return 'Student Updated';
});

Route::get('/student/delete', function(){
    $student = Student::where('email', 'john.doe@newemail.com')->first();
    $student->delete();
    return 'Student Deleted!!!';
});

Route::get('/courses/create', function(){
    $course = new Courses();
    $course->course_name = 'Introduction  to Databases';
    $course->save();
    return 'Course Created!!';
});

Route::get('/courses/{id}/student', function($id){
    $course = Courses::find($id);
    return $course->student;
});
