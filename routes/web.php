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

// Route::get('hello/{msg}', function ($msg) {
// $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body {
//   font-size:16pt;
//   color:#999;
// }
// h1{
//   font-size:100pt;
//   text-align:right;
//   color:#222;
//   margin:-40px 0px -50px 0px;
// }
// </style>
// </head>
// <body>
//   <h1>Hello</h1>
//   <p>{$msg}</p>
// </body>
// </html>
// EOF;
//
//   return $html;
// });

// Route::get('helloo/{id?}/{pass?}', 'helloController@index');
Route::get('hello','helloController@index');
Route::post('hello','helloController@post');

// Route::get('helloo', function () {
//     return view('hello.index');
// });
// Route::get('hello/other','helloController@other');
