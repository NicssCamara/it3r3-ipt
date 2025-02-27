<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemController;
use App\Http\Controllers\StudentController;

Route::get('/items', [ItemController::class, 'index']);       // Get all items
Route::post('/items', [ItemController::class, 'store']);      // Create an item
Route::get('/items/{id}', [ItemController::class, 'show']);   // Get a single item
Route::put('/items/{id}', [ItemController::class, 'update']); // Update an item
Route::delete('/items/{id}', [ItemController::class, 'destroy']); // Delete an item

// CRUD Routes for other models
Route::apiResource('items', ItemController::class);
Route::apiResource('students', StudentController::class);
Route::apiResource('parents', ParentsController::class);
Route::apiResource('teachers', TeacherController::class);
Route::apiResource('grades', GradeController::class);
Route::apiResource('courses', CourseController::class);
Route::apiResource('classrooms', ClassroomController::class);
Route::apiResource('classroom_students', ClassroomStudentController::class);
Route::apiResource('attendances', AttendanceController::class);
Route::apiResource('exam_types', ExamTypeController::class);
Route::apiResource('exams', ExamController::class);
Route::apiResource('exam_results', ExamResultController::class);