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

Route::get('/soufiane',function(){
    return "<h1>Aabbo</h1>";

});

route::get('/{nbrs}',function($nbrs){
    
    return view('welcome',compact('nbrs'));
});

// route::get('/{a}/{b}',function($a,$b){
    
//     return view('exo3',compact('a','b'));
// });

route::get('/couleur/{c}',function($c){
    return view('couleur',compact('c'));

});



