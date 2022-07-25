<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$posts = [
    1 => [
        'title' => 'Laravel',
        'content' => 'Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern.',
        'is_new' => true,
    ],
    2 => [
        'title' => 'Vue.js',
        'content' => 'Vue.js is a progressive framework for building user interfaces. It is designed from the ground up to be incrementally adoptable.',
        'is_new' => false,
    ],
];

//$posts = [];

//Route::get('/', function () {
//    return view('home.index');
//})->name('home.index');

//Route::view('/', 'home.index');
Route::get('/', [HomeController::class, 'home'])
    ->name('home.index');
Route::get('/contact', [HomeController::class, 'contact'])
    ->name('home.contact');
Route::get('/single', AboutController::class);

Route::resource('posts', PostsController::class)
    ->only(['index', 'show', 'create', 'store', 'edit', 'update']);

//Route::get('/contact', function () {
//    return view('home.contact');
//})->name('home.contact');

//Route::view('/contact', 'home.contact');

//Route::get('/posts', function (Request $request) use ($posts) {
//    //dd(request()->all());
//    //dd((int)request()->input('page', 1));
//    //dd((int)request()->query('page', 1));

//    return view('posts.index', ['posts' => $posts]);
//});

//Route::get('/posts/{id}', function ($id) use ($posts) {
//    abort_if(!isset($posts[$id]), 404);
//    return  view('posts.show', ['post' => $posts[$id]]);
//})
//    //->where([
//    //    'id' => '[0-9]+',
//    //]) // handled with RouteServiceProvider.php boot() -> Route::pattern('id', '[0-9]+');
//    ->name('posts.show');

//Route::get('/recent-posts/{days_ago?}', function ($days_ago = 20) {
//    return 'Posts from ' . $days_ago . ' days ago';
//})->name('posts.recent.index')->middleware('auth');

Route::prefix('/fun')->name('fun.')->group(function () use ($posts) {

    Route::get('/responses', function () use ($posts) {
        return response($posts, 201)
            //->view('posts.index', ['posts' => $posts])
            ->header('Content-Type', 'application/json')
            ->cookie('MY_COOKIE', 'my cookie', 3600);
    })->name('responses');

    Route::get('/redirect', function () {
        return redirect('/contact');
    })->name('redirect');

    Route::get('/back', function () {
        return back();
    })->name('back');

    Route::get('/named-route', function () {
        return redirect()->route('posts.show', ['id' => 1]);
    })->name('named-route');

    Route::get('/away', function () {
        return redirect()->away('https://www.google.com');
    })->name('away');

    Route::get('/json', function () use ($posts) {
        return response()->json($posts);
    })->name('json');

    //Route::get('fun/download', function () {
    //    return response()->download(public_path('/index.php'), 'index.php');
    //});
});