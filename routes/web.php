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
    return view('welcome');
});
Route::get('/model', function() {
    // $products = \App\Product::all(); // pegar todos dados da tabela products
    //all -> busca todos dados tabela
    //find -> busca uma id em especifico na tabela
    //where -> clausula para busca ::where(coluna, valor)-> get()\\ retornar todos ||first()\\ retornar primeiro valor
    //paginate(quantidade por pagina)
    // Mass Assignment
    // $user =\App\User::create([
    //     'name' => 'Jefferson Marinho',
    //     'email' => 'jeffersonmarinho@gmail.com',
    //     'password' => bcrypt('12345678')
    // ]);

    //Mass Update
    $user = \App\User::find(42);
    $user->update([
        'name' => 'Atualizando com Mass Update'
    ]);
    dd($user);

    // return \App\User::paginate(5);
});