<?php

use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');


Route::post('/signup', [AuthController::class, 'signup'])->name('signupDone');

Route::post('/login', [AuthController::class, 'login'])->name('loginDone');


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


//  -----------------------------------------------------------------------------------------


Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/dashboard/{user}' , [AdminController::class , 'destroyUser'])->name('deleteUser');
    Route::get('/admin/dashboard/user-info/{user}' , [AdminController::class , 'show'])->name('showUserInfo');
});


//  -----------------------------------------------------------------------------------------


Route::middleware('userAuth')->group(function () {
    Route::get('/mail-form', [MailController::class, 'mailForm'])->name('mail');
    Route::post('/send-mail', [MailController::class, 'send'])->name('send.mail');
});



// Route::get('/test-mail', function () {
//     Mail::raw('This is a test email from QuickMail project.', function ($message) {
//         $message->to('khafra3.932006@gmail.com')
//                 ->subject('QuickMail Test');
//     });

//     return 'Email sent!';
// });