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

Route::group(['middleware' => 'auth'], function(){

});

Route::get('/', 'GrupoController@index');
Route::resource('/grupos', 'GrupoController');

Route::group(['prefix' => 'eu'], function(){
  Route::get('/', function(){
    return 'Eduardo Prioli Novaes';
  });

  Route::get('/{id}', function($id){
    $resposta;
    switch ($id) {
      case '1':
        $resposta = 'Eduardo';
        break;
      case '2':
        $resposta = 'Prioli';
        break;
      case '3':
        $resposta = 'Novaes';
        break;
      default:
        $resposta = 'Eduardo Prioli Novaes';
        break;
    }
    return $resposta;
  })->where('id', '[0-9]+');

  Route::get('/{id}/{slug}', function($id, $slug){
    return url('/eu/'.$id.'/'.$slug);
  })->where(['id'=>'[0-9]+', 'slug' => '[a-zA-Z]+']);
});
