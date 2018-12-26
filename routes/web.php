<?php

use App\Jobs\ProcessEmail;
use App\Events\UserSignedUp;
use App\Jobs\SendWelcomeEmail;
use function GuzzleHttp\json_encode;
use Illuminate\Support\Facades\Redis;
use function Composer\Autoload\includeFile;

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

Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('home.index');
})->name('home')->middleware('rediect');

Route::get('/signedup', function () {
    Log::info("Request Cycle with Queues Begins");
    dispatch(new SendWelcomeEmail())->onQueue('emails');
    Log::info("Request Cycle with Queues Ends");

    // dispatch(new ProcessEmail(auth()->user()))->delay(now()->addSeconds(60 * 2))->onQueue('email');
    return 'done';
});

Route::get('/elements', 'HomeController@elements')->name('elements');
Route::get('/generics', 'HomeController@generics')->name('generics');

Route::get('test-broadcast', function () {
    // event(new \App\Events\ExampleEvent);
    Redis::publish('test-event', json_encode(['event'=> 'example','data' => ['key' => 'value']]));
});

require(__DIR__ . '/Admin/web.php');
