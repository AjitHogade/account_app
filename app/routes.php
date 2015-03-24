<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|


Route::get('/login', function()
{
	return View::make('users.login');
});

Route::get('/register', function()
{
    return View::make('users.register');
});
*/
Route::get('/login',[
    'as' => 'login',
    'uses'=>'UserController@getLogin'
]);

//checking login
Route::post('/login',[
    'as'=>'login',
    'method'=>'post',
    'uses'=>'UserController@postLogin',
]);

Route::get('/logout', array(
    'as' => 'logout',
    'uses' => 'UserController@logout'
));
Route::resource('register', 'UserController');

Route::group(array('before' => 'auth'), function()
{

    Route::get('/desktop', function()
    {
        return View::make('desktop.index');
    });
        Route::get('/stats', function()
        {
            return View::make('desktop.stats');
        });

    Route::get('/add_docs', function()
    {
        return View::make('documents.new_doc');
    });
    Route::post('/add_docs',[
        'as' => 'add_docs',
        'uses'=>'DocumentController@select'
    ]);
    Route::get('/gov_doc', function()
    {
        return View::make('documents.gov_doc');
    });
    Route::post('/gov_doc',[
        'as' => 'gov_doc',
        'uses'=>'DocumentController@insert'
    ]);
    Route::get('/bank_doc', function()
    {
        return View::make('documents.bank_doc');
    });
    Route::post('/bank_doc',[
        'as' => 'bank_doc',
        'uses'=>'DocumentController@insert'
    ]);
    Route::get('/view_gov', function()
    {
        return View::make('documents.view_gov');
    });
    Route::get('/bank_details', function()
    {
        return View::make('documents.view_bank_doc');
    });
    Route::get('/isset_account', function()
    {
        return View::make('documents.isset_account');
    });
    Route::get('/gov_doc_id',[
        'as' => 'gov_doc_id',
        'uses'=>'DocumentController@gov_id'
    ]);

    Route::get('/stats', function()
{
    return View::make('desktop.stats');
});Route::get('/stats', function()
{
    return View::make('desktop.stats');
});Route::get('/stats', function()
{
    return View::make('desktop.stats');
});




});