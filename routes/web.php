<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers;

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

Route::get('/', function () {    return view('edumate.index'); })->name('home');

Route::post('/newsletter','\App\Http\Controllers\MailController@newsletter');
Route::get('/contact', \App\Http\Controllers\ContactController::class)->name('contact');
Route::post('/contact/form','\App\Http\Controllers\MailController@contact_form');



// Прості сторінки сайту
Route::view('/schedule','edumate.schedule')->name('schedule'); // розклад
Route::view('/lists','edumate.lists')->name('lists'); // списки груп
Route::view('/session','edumate.session')->name('session'); // сесія

//Route::view('/admission','edumate.admission.index')->name('admission'); // Вступ
Route::view('/admission','edumate.admission.001')->name('admission'); // Вступ

Route::view('/statement','edumate.statement')->name('statement'); // заяви
Route::view('/registration','edumate.registration')->name('registration'); // заяви
Route::view('/oblik_VMV','edumate.oblik_VMV')->name('oblik_VMV'); // заяви



Route::get('/teachers', ['\App\Http\Controllers\TeacherController', 'show'])->name('teachers'); // заяви




Route::view('/plan','edumate.plan')->name('plan'); // заяви



//
//Route::prefix('admin')->as('admin')->namespace('')->group( function (){
//
//});


// Контроллер для постів. Проба ресурс
Route::resource('posts', \App\Http\Controllers\Posts\PostController::class);

















//Route::get('/blog/{post?}', \App\Http\Controllers\BlogController::class)->name('blog');
Route::get('/blog/{post?}', \App\Http\Controllers\ContactController::class)->name('blog');







// test PDF
Route::get('/curriculum/', [\App\Http\Controllers\CurriculumController::class, 'index'])->name('curriculum');
Route::post('/curriculum/', [\App\Http\Controllers\CurriculumController::class, 'store'])->name('curriculum.store');
Route::get('/curriculum/{id}/pdf', [\App\Http\Controllers\PdfGeneratorController::class, 'index_pdf']);






// Tail - Хвостовки
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get( 'admin/tail/',  'TailController@adminTailIndex')    ->name('tail.admin.index');
    Route::get( 'admin/tail_new/',  'TailController@adminTailNew')    ->name('tail.admin.new');
    Route::post('admin/tail/',  'TailController@adminTailPost')     ->name('tail.admin.post');
    Route::get( 'admin/tails/', 'TailController@adminTailShow')     ->name('tail.admin.show');

    Route::post('/tail_post',   'TailController@resultPost')        ->name('tail.pos');
    Route::get('/tail/{tail}',  'TailController@index')             ->name('tail');
    Route::get('/edit/{tail}',  'TailController@editView')           ->name('edit_view');
});

// Teacher - Викладач
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get( 'teacher/{teacher}',  'TeacherController@index')    ->name('teacher');
    Route::get( 'admin/teacher/{teacher}',  'TeacherController@adminAddTail')->name('admin.teacher');

});









// TestController
Route::get('/test', [\App\Http\Controllers\TestController::class, 'index']);

//************************************************************
// Admin panel
//************************************************************
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function (){

    Route::view('/','admin.index')->name(''); // заяви

    Route::resource('levels', App\Http\Controllers\Admin\LevelsController::class);
    Route::resource('specialties', App\Http\Controllers\Admin\SpecialtiesController::class);
    Route::resource('programs', App\Http\Controllers\Admin\ProgramsController::class);


    Route::resource('cathedras', App\Http\Controllers\Admin\CathedrasController::class);
    Route::resource('teachers', App\Http\Controllers\Admin\TeachersController::class);

    Route::resource('groups', App\Http\Controllers\Admin\GroupsController::class);
    Route::resource('students', App\Http\Controllers\Admin\StudentsController::class);




    Route::resource('subjects', App\Http\Controllers\Admin\SubjectsController::class);
//    Route::resource('plans', App\Http\Controllers\Admin\PlansController::class);
});










Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', /*'middleware' => ['auth', 'admin']*/], function (){

//    Route::view('/','admin.index')->name('admin1'); // admin






    Route::group(['namespace' => 'User', 'prefix' => 'users'], function (){
        Route::get('/',                     'IndexController')->    name('admin.user.index');
        Route::get('/create',               'CreateController')->   name('admin.user.create');
        Route::post('/',                    'StoreController')->    name('admin.user.store');
        Route::get('/{user}',               'ShowController')->     name('admin.user.show');
        Route::get('/{user}/edit',          'EditController')->     name('admin.user.edit');
        Route::patch('/{user}',             'UpdateController')->   name('admin.user.update');
        Route::delete('/{user}',            'DeleteController')->   name('admin.user.delete');
    });

//    Route::group(['prefix' => 'cathedras'], function (){
//        Route::get('/',                     'CathedraController@index')->    name('admin.cathedra.index');
//        Route::get('/create',               'CathedraController@create')->   name('admin.cathedra.create');
//        Route::post('/',                    'CathedraController@store')->    name('admin.cathedra.store');
//        Route::get('/{cathedra}',            'CathedraController@show')->     name('admin.cathedra.show');
//        Route::get('/{cathedra}/edit',       'CathedraController@edit')->     name('admin.cathedra.edit');
//        Route::patch('/{cathedra}',          'CathedraController@update')->   name('admin.cathedra.update');
//        Route::delete('/{cathedra}',         'CathedraController@delete')->   name('admin.cathedra.delete');
//    });

//    Route::group(['prefix' => 'subjects'], function (){
//        Route::get('/',                     'SubjectController@index')->    name('admin.subject.index');
//        Route::get('/create',               'SubjectController@create')->   name('admin.subject.create');
//        Route::post('/',                    'SubjectController@store')->    name('admin.subject.store');
//        Route::get('/{subject}',            'SubjectController@show')->     name('admin.subject.show');
//        Route::get('/{subject}/edit',       'SubjectController@edit')->     name('admin.subject.edit');
//        Route::patch('/{subject}',          'SubjectController@update')->   name('admin.subject.update');
//        Route::delete('/{subject}',         'SubjectController@delete')->   name('admin.subject.delete');
//    });

    Route::group(['namespace' => 'Blog', 'prefix' => 'blog'], function (){
        Route::get('/', 'IndexController')->name('admin.blog.index');

        Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function (){
            Route::get('/',                 'IndexController')->    name('admin.blog.category.index');
            Route::get('/create',           'CreateController')->   name('admin.blog.category.create');
            Route::post('/',                'StoreController')->    name('admin.blog.category.store');
            Route::get('/{category}',       'ShowController')->     name('admin.blog.category.show');
            Route::get('/{category}/edit',  'EditController')->     name('admin.blog.category.edit');
            Route::patch('/{category}',     'UpdateController')->   name('admin.blog.category.update');
            Route::delete('/{category}',    'DeleteController')->   name('admin.blog.category.delete');
        });

        Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function (){
            Route::get('/',                 'IndexController')->    name('admin.blog.tag.index');
            Route::get('/create',           'CreateController')->   name('admin.blog.tag.create');
            Route::post('/',                'StoreController')->    name('admin.blog.tag.store');
            Route::get('/{tag}',            'ShowController')->     name('admin.blog.tag.show');
            Route::get('/{tag}/edit',       'EditController')->     name('admin.blog.tag.edit');
            Route::patch('/{tag}',          'UpdateController')->   name('admin.blog.tag.update');
            Route::delete('/{tag}',         'DeleteController')->   name('admin.blog.tag.delete');
        });

        Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function (){
            Route::get('/',                 'IndexController')->    name('admin.blog.post.index');
            Route::get('/create',           'CreateController')->   name('admin.blog.post.create');
            Route::post('/',                'StoreController')->    name('admin.blog.post.store');
            Route::get('/{post}',            'ShowController')->     name('admin.blog.post.show');
            Route::get('/{post}/edit',       'EditController')->     name('admin.blog.post.edit');
            Route::patch('/{post}',          'UpdateController')->   name('admin.blog.post.update');
            Route::delete('/{post}',         'DeleteController')->   name('admin.blog.post.delete');
        });
    });
});



//
//Route::get('/linkstorage', function () {
//    Artisan::call('storage:link');
//    return "linkstorage is done.";
//});
//
//
//Route::get('/clear', function () {
//    Artisan::call('cache:clear');
//    Artisan::call('config:cache');
//    Artisan::call('view:clear');
//    Artisan::call('route:clear');
//
//    return "Cache is clear.";
//});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
