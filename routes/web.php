<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home']);





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [AdminController::class , 'redirect']);



Route::get('/add_faculty_page', [AdminController::class , 'add_faculty_page']);

Route::post('/create_faculty', [AdminController::class , 'create_faculty']);

Route::get('/view_faculty_page', [AdminController::class , 'view_faculty_page']);

Route::get('/edit_faculty_page/{id}', [AdminController::class , 'edit_faculty_page']);

Route::post('/update_faculty/{id}', [AdminController::class , 'update_faculty']);

Route::get('/delete_faculty/{id}', [AdminController::class , 'delete_faculty']);




Route::get('/add_gallery_page', [AdminController::class , 'add_gallery_page']);

Route::post('/create_gallery', [AdminController::class , 'create_gallery']);

Route::get('/view_gallery_page', [AdminController::class , 'view_gallery_page']);

Route::get('/edit_gallery_page/{id}', [AdminController::class , 'edit_gallery_page']);

Route::post('/update_gallery/{id}', [AdminController::class , 'update_gallery']);

Route::get('/delete_gallery/{id}', [AdminController::class , 'delete_gallery']);




Route::get('/add_event_page', [AdminController::class , 'add_event_page']);

Route::post('/create_event', [AdminController::class , 'create_event']);

Route::get('/view_event_page', [AdminController::class , 'view_event_page']);

Route::get('/edit_event_page/{id}', [AdminController::class , 'edit_event_page']);

Route::post('/update_event/{id}', [AdminController::class , 'update_event']);

Route::get('/delete_event/{id}', [AdminController::class , 'delete_event']);




Route::get('/add_notice_page', [AdminController::class , 'add_notice_page']);

Route::post('/create_notice', [AdminController::class , 'create_notice']);

Route::get('/view_notice_page', [AdminController::class , 'view_notice_page']);

Route::get('/edit_notice_page/{id}', [AdminController::class , 'edit_notice_page']);

Route::post('/update_notice/{id}', [AdminController::class , 'update_notice']);

Route::get('/delete_notice/{id}', [AdminController::class , 'delete_notice']);




Route::get('department_page', [HomeController::class, 'department_page']);

Route::get('dept_details_page/{id}', [HomeController::class, 'dept_details_page']);





Route::get('/add_dept_page', [AdminController::class , 'add_dept_page']);

Route::post('/create_dept', [AdminController::class , 'create_dept']);

Route::get('/view_dept_page', [AdminController::class , 'view_dept_page']);

Route::get('/edit_dept_page/{id}', [AdminController::class , 'edit_dept_page']);

Route::post('/update_dept/{id}', [AdminController::class , 'update_dept']);

Route::get('/delete_dept/{id}', [AdminController::class , 'delete_dept']);





Route::get('/add_course_page', [AdminController::class , 'add_course_page']);

Route::post('/create_course', [AdminController::class , 'create_course']);

Route::get('/view_course_page', [AdminController::class , 'view_course_page']);

Route::get('/edit_course_page/{id}', [AdminController::class , 'edit_course_page']);

Route::post('/update_course/{id}', [AdminController::class , 'update_course']);

Route::get('/delete_course/{id}', [AdminController::class , 'delete_course']);





Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::post('/contact', [HomeController::class, 'contact']);





Route::get('/candidate_page', [AdminController::class , 'candidate_page']);

Route::get('/delete_candidate/{id}', [AdminController::class , 'delete_candidate']);

Route::get('/email_page/{id}', [AdminController::class , 'email_page']);

Route::post('/send_email', [AdminController::class , 'send_email']);





Route::get('/add_student_page', [AdminController::class , 'add_student_page']);

Route::post('/create_student', [AdminController::class , 'create_student']);

Route::get('/view_student_page', [AdminController::class , 'view_student_page']);

Route::get('/edit_student_page/{id}', [AdminController::class , 'edit_student_page']);

Route::post('/update_student/{id}', [AdminController::class , 'update_student']);

Route::get('/delete_student/{id}', [AdminController::class , 'delete_student']);



Route::get('gallery_page', [HomeController::class, 'gallery_page']);

Route::get('contact_page', [HomeController::class, 'contact_page']);

Route::get('about_page', [HomeController::class, 'about_page']);

Route::get('notice_page', [HomeController::class, 'notice_page']);

Route::get('achievement_page', [HomeController::class, 'achievement_page']);

Route::get('faculty_page', [HomeController::class, 'faculty_page']);

Route::get('faculty_details_page/{id}', [HomeController::class, 'faculty_details_page']);

Route::get('course_page', [HomeController::class, 'course_page']);

Route::get('course_details_page/{id}', [HomeController::class, 'course_details_page']);

Route::get('helpline_page', [HomeController::class, 'helpline_page']);

Route::get('student_page', [HomeController::class, 'student_page']);

Route::get('evaluation', [HomeController::class, 'evaluation']);

Route::get('evaluate_faculty_page/{id}', [HomeController::class, 'evaluate_faculty_page']);




