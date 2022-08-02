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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Frontends@index')->name('/');

Route::get('lang/{locale}', 'LocalizationController@index');

Route::get('/faqs', 'Frontends@faqs');

Route::get('/schedule', 'Frontends@schedule');

Route::get('/confirmuser', 'Frontends@confirmaccount')->name('confirmuser');

Route::post('/admin_confirmed', 'Frontends@comfirmid');

Route::get('/buy-ticket', 'TicketController@index')->name('buy-ticket');

Route::post('/create-ticket', 'TicketController@create')->name('create-ticket');

Route::get('/confirm-ticket', 'TicketController@confirmticket')->name('confirm-ticket');

Route::get('/unpaid-ticket', 'TicketController@paylater')->name('unpaid-ticket');

Route::get('/ticket-history', 'TicketController@history')->name('ticket-history');

Route::post('/pay-ticket', 'TicketController@paynow')->name('pay-ticket');

Route::post('/delete-ticket', 'TicketController@delete')->name('delete-ticket');

Route::get('/ticket-paid', 'TicketController@paid')->name('ticket-paid');

Route::get('/ticket-pdf', 'TicketController@pdf')->name('ticket-pdf');

Route::get('/editprofile', 'UpdateController@index');

Route::post('/profileupdated', 'UpdateController@update')->name('profileupdated');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admindashboard', 'Admin\AdminController@index')->name('admindashboard');

Route::get('/addstaff', 'Admin\AdminController@newadmin')->name('addstaff');

Route::post('/uidconfirmed', 'Admin\AdminController@uidconfirmed')->name('uidconfirmed');

Route::get('/addstaff_page2', 'Admin\AdminController@newadminpage2')->name('addstaff_page2');

Route::post('/detailsconfirmed', 'Admin\AdminController@detailsconfirmed')->name('detailsconfirmed');

Route::get('/addstaff_page3', 'Admin\AdminController@newadminpage3')->name('addstaff_page3');

Route::post('/role_updated', 'Admin\AdminController@roleupdate')->name('role_updated');

Route::get('/addstaff_page4', 'Admin\AdminController@newadminpage4')->name('addstaff_page4');

Route::get('/staffroll_page1', 'Admin\StaffController@index')->name('staffroll_page1');
