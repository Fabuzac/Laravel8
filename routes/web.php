<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\FrontMatter\Data\SymfonyYamlFrontMatterParser;

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
//Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

//closure function
Route::get('article', function() {
    return view('article');
});

Route::get('/test', function() {
    return 'GET route';
});

// editing article
Route::put('/store', function() {
    return 'put route';
});


Route::post('/create', function() {
    return view('create');
});

Route::get('/articles/{id}/comment/{author?}', function($id, $author = 'Author') {
    return $author . 'text blabla' . $id;
});

//Group
Route::prefix('admin')->group(function() {

    Route::put('/users', function() {
        return 'put route';
    });

    Route::put('/articles', function() {
        return 'put route';
    });

});




// Route::post('/articles', [App\Http\Controllers\ArticlesController::class, 'store']);

// Route::get('posts/{post}', function($slug) {

//     return view('post', [
//         'post' => Post::find($slug),
//     ]);
// });

// Route::get('/', function () {
//     $document = YalmFrontMatter::parseFile(
//         ressource_path('posts/my-first-post.html');
//     )
// });

// collect()->each();
// collect($files)->map(function($file) {
// });