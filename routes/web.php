<?php

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

/* welcome page for all users */
Route::get('/', function () {
  return view('welcome');
});

/* authentication route by lavavel default */
Auth::routes();
/* one line of statement above equals to the following statements below */
// // the Route for user authentication
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// // the Route for user registration
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// // the Route for resetting password
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// // the Route for email authentication
// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
// Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

/* the Route for home page */
Route::get('/home', 'HomeController@index')->name('home');

/* the Route for master */
Route::middleware(['auth', 'master'])->group(function () {
    Route::get('/masters', 'MasterController@index')->name('masters.index');
    Route::resource('/schools', 'SchoolController')->only(['index', 'edit', 'store', 'update']);

    Route::get('register/admin/{id}/{code}', function($id, $code){
      session([
        'register_role' => 'admin',
        'register_school_id' => $id,
        'register_school_code' => $code,
        ]);
      return redirect()->route('register');
    });
    
    Route::post('register/admin', 'UserController@storeAdmin');
    Route::get('master/activate-admin/{id}','UserController@activateAdmin');
    Route::get('master/deactivate-admin/{id}','UserController@deactivateAdmin');
    Route::get('school/admin-list/{school_id}','SchoolController@showAdmins');

    // manage administrators
    Route::post('school/admin-list/store','SchoolController@storeAdminProfile');

    // the Route for resetting password
    Route::post('admin/password/reset', 'SchoolController@resetAdmin');
});

/* the Route for all users */
Route::middleware(['auth'])->group(function (){
  if (config('app.env') != 'production') {
    Route::get('user/config/impersonate', 'UserController@impersonateGet');
    Route::post('user/config/impersonate', 'UserController@impersonate');
  }

  Route::get('users/{school_id}/teachers', 'UserController@indexTeacher');
  Route::get('users/{school_id}/students', 'UserController@indexStudent');

  Route::get('user/{id}', 'UserController@show'); // show user's profile
  Route::get('user/config/change_password', 'UserController@changePasswordGet');
  Route::post('user/config/change_password', 'UserController@changePasswordPost');

  Route::post('edit/user','UserController@update'); // update a user
});

/* the Route for administrators */
Route::middleware(['auth','admin'])->group(function (){

  Route::prefix('school')->name('school.')->group(function (){
    Route::post('theme','SchoolController@changeTheme');
	  Route::post('set-ignore-sessions','SchoolController@setIgnoreSessions');
  });
  
  /* the Route for clicking "programmes" */
  Route::get('/programmes/business', 'ProgrammeController@showBusiness')->name('programme.business');
  Route::get('/programmes/it', 'ProgrammeController@ShowIT')->name('programme.it');

  /* show all courses */
  Route::get('/programmes/business/{id}', 'CourseController@course');
  Route::get('/programmes/it/{id}', 'CourseController@course');

  // edit courses
  Route::post('edit/course/{id}','CourseController@update');

  // show the selection list of a student or a teacher
  Route::get('selectionlist/student/{id}', 'MyClassController@studentSelections');
  Route::get('selectionlist/teacher/{id}', 'MyClassController@teacherSelections');
  
  // reselect courses
  Route::get('reselect/student/{id}', 'MyClassController@studentReselect');

  // settings page
  Route::get('/settings', 'SettingController@index')->name('settings.index');
  Route::post('/settings', 'SettingController@toggle');
  Route::post('/settings/checkcode', 'CourseController@checkCode');
  Route::post('/settings/addcourse', 'CourseController@store');
  Route::post('/settings/addteacher', 'UserController@storeTeacher');
  Route::post('/settings/addstudent', 'UserController@storeStudent');

  // the Route for resetting password
  Route::post('user/password/reset', 'UserController@resetUser');
});

/* the Route for teachers */
Route::middleware(['auth','teacher'])->group(function (){
  /* the Route for clicking "programmes"，which needs to be optimized later */
  Route::get('/programmes/business', 'ProgrammeController@showBusiness')->name('programme.business');
  Route::get('/programmes/it', 'ProgrammeController@ShowIT')->name('programme.it');

  /* show all courses */
  Route::get('/programmes/business/{id}', 'CourseController@course');
  Route::get('/programmes/it/{id}', 'CourseController@course');

  Route::get('tcourses', 'MyClassController@teacherCourses')->name('mycourses.teacher-mycourses');
  Route::post('tcourses', 'MyClassController@studentGrade');
});

/* the Route for students */
Route::middleware(['auth', 'student'])->group(function(){
  Route::get('courses/selection', 'CourseController@selectionList');
  Route::post('courses/selection', 'MyClassController@studentStore');

  /* show seletec courses of a student*/
  Route::get('mycourses', 'MyClassController@studentCourses');
});

// View Emails - in browser
Route::prefix('emails')->group(function () {
  // Welcome Email
  Route::get('/welcome', function () {
      $user = App\User::find(1);
      $password = "secret";
      return new App\Mail\SendWelcomeEmailToUser($user, $password);
  });
});