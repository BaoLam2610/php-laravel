<?php

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

Route::get('/', 'App\Http\Controllers\HomeController@showWelcome');

// Route::get('/', function () {
//     return 'welcome';
// });

Route::get('about/character',function(){
    return 'Pham Hoai Nam';
});

Route::any('something', function() {
    return 'Demo laravel';
});

Route::get('{id}', function($id) {
    return $id. " đã trở thành trùm trường"; 
});

Route::get('{id}/{content}', function($id,$content) {
    return "$id đã trở thành trùm trường, với khả năng $content" ; 
});

Route::get('about/{id}/{content}', function($id,$content) {
   return redirect('something');
});

Route::get('about/baolam', function() {
   return redirect('something');
});

Route::get('baolam', function() {
    return "Bao lam pl hd";
});   

Route::get('hoainam', function() {
    return "Thanh hoa";
});   