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
*/

/** ------------------------------------------
 *  Route model binding
 *  ------------------------------------------
 */
Route::model('user', 'User');
Route::model('role', 'Role');

/** ------------------------------------------
 *  Route constraint patterns
 *  ------------------------------------------
 */
Route::pattern('user', '[0-9]+');
Route::pattern('role', '[0-9]+');
Route::pattern('token', '[0-9a-z]+');

/** ------------------------------------------
 *  Admin Routes
 *  ------------------------------------------
 */
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{
    # User Management
    Route::get('users/{user}/show', 'AdminUsersController@getShow');
    Route::get('users/{user}/edit', 'AdminUsersController@getEdit');
    Route::post('users/{user}/edit', 'AdminUsersController@postEdit');
    Route::get('users/{user}/delete', 'AdminUsersController@getDelete');
    Route::post('users/{user}/delete', 'AdminUsersController@postDelete');
    Route::controller('users', 'AdminUsersController');

    # User Role Management
    Route::get('roles/{role}/show', 'AdminRolesController@getShow');
    Route::get('roles/{role}/edit', 'AdminRolesController@getEdit');
    Route::post('roles/{role}/edit', 'AdminRolesController@postEdit');
    Route::get('roles/{role}/delete', 'AdminRolesController@getDelete');
    Route::post('roles/{role}/delete', 'AdminRolesController@postDelete');
    Route::controller('roles', 'AdminRolesController');

    # Admin Dashboard
    Route::controller('/', 'AdminDashboardController');
});


/** ------------------------------------------
 *  Frontend Routes
 *  ------------------------------------------
 */

Route::get('user/profile', [ 'as' => 'user.profile', 'uses' => 'UserController@getProfile' ]);
Route::get('user/games', [ 'as' => 'user.games', 'uses' => 'UserController@getGames' ]);
Route::get('user/offers', [ 'as' => 'user.offers', 'uses' => 'UserController@getOffers' ]);

// User reset routes
Route::get('user/reset/{token}', 'UserController@getReset');
// User password reset
Route::post('user/reset/{token}', 'UserController@postReset');
//:: User Account Routes ::
Route::post('user/{user}/edit', 'UserController@postEdit');

//:: User Account Routes ::
Route::post('user/login', 'UserController@postLogin');

# User RESTful Routes (Login, Logout, Register, etc)
Route::controller('user', 'UserController');

//:: Application Routes ::

# Filter for detect language
Route::when('contact-us','detectLang');

# Contact Us Static Page
Route::get('contact-us', function()
{
    // Return about us page
    return View::make('site/contact-us');
});


# Index Page - Last route, no matches
Route::get('/', array('before' => 'detectLang','uses' => 'HomeController@getIndex'));
Route::get('/about', 'StaticController@getAbout');
Route::get('/terms', 'StaticController@getTerms');
Route::get('/privacy', 'StaticController@getPrivacy');

Route::get('/game', 'GameController@getList');
Route::get('/game/sell', 'GameController@getSell');
Route::get('/game/{gameSlug}', 'GameController@getView');
Route::post('/game/sell/{gameSlug}', 'GameController@postSell');
Route::get('/game/search/{query}', 'GameController@getSearch');
Route::post('/product/offer', 'GameController@postOffer');

Route::get('/platforms', 'PlatformController@getList');
Route::get('/platforms/{platformSlug}', 'PlatformController@getView');

Event::listen('illuminate.query', function($query) {
    // var_dump($query);
});
