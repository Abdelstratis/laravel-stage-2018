<?php

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
    return view('Welcome');
});


/*
Route::get('{n}', function($n) {
    return 'Je suis la page ' . $n . ' !';
})->where('n', '[1-3]');

*/

/*
Route::get('users', 'UsersController@getInfos');
Route::post('users', 'UsersController@postInfos');*/


/*
Route::get('/inscription', function()
{
    return view('template');
});
*/
Route::get('/about',function ()

{

	return view('about');

});

Route::get('/vue',function ()

{

	return view('about');

});

Route::get('/inscription',function ()

{

	return view('insertForm');

});


Route::post('public/insert','Controller@insert');
Route::get('public/insert','Controller@insert');



Route::get('/prive' , function()
{
    $mdp = 'stratis';
    return view('vue1', compact('mdp') );
});

Route::post('public/prive', 'PostController@index');
Route::get('public/prive', 'PostController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'HomeController@index');

Route::get('/page', 'NewController@page');






Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');




Route::get("/data", function()
{

    $users = DB::table("client")->get() ;

    return View::make("user")->with("allClient", $users);

});

Route::get('/phone', function (){

    return view('test');
});




