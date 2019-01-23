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

/*Default Route*/

Route::get('/', function () {
    return view('index') ; 
})->name("index");

/*Default Route*/

/*Start Qui Nous Sommes*/

Route::get('qui-nous-sommes',function()
{

	return view('qui-nous-sommes.qui-nous-sommes');

})->name('qui-nous-sommes');

/*End Qui Nous Sommes*/



/*Start Form Aderant*/

Route::get('form/aderant',function()
{
    return view('form.form');
})->name('form.aderant');

/*End Form Aderant*/

/*Start Form Non Aderant*/

Route::get('form/non-aderant',function()
{
    return view('form.form');
})->name('form.non.aderant');

/*End Form Non Aderant*/

/*Start Form post*/

Route::post('/form/non-aderant/post','NonaderantController@store')->name('form.non.aderant.post') ; 
Route::post('/form/aderant/post','AderantController@store')->name('form.aderant.post') ; 


/*End From Post */





/*Start Contact Form*/

Route::post('/form/contact/post','ContactController@store')->name('contact.post') ; 

/*End Contact Form*/





