<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');

#Views
Route::get('/nvk-view1',function(){
    return view('nvk-view1',['name'=>'NVK!']);});
       

Route::get('/nvk-view2',function(){
    return view('nvk-view2',[    
    'name'=>'Nguyen Van Khanh!',
    'arr'=>[1,4,7,2,9],
        ]);
        
        });

        Route::get('/nvk-view3',function(){
            return view('nvk-view3',[
            
            'name'=>["Nguyen","Van","Khanh"],'arr'=>[10,15,12,1,22,30],
'users'=>[],
]);

});

/*
Route::get('/', function () {
return view('welcome');
});
*/
Route::get('/', [NVKProductController::class,'index']);

#Template Blade Layout
Route::get('/home',function(){
    return view('index');
    });

Route::get('/about-us',function(){
    return view('about');
    });
    
Route::get('/contact',function(){
    return view('contact');
    });

});
