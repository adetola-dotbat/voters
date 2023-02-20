<?php

use App\Http\Controllers\PresidentialController;
use App\Http\Controllers\ViewController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/presidential_details', [ViewController::class, 'viewPresidential'])->name('pdetails');
Route::get('/graph', [ViewController::class, 'graph'])->name('graph');
Route::get('/score_data', [ViewController::class, 'scoreData'])->name('sdata');
Route::get('/report_details', [ViewController::class, 'reportDetails'])->name('report.details');
Route::get('/senate_list_one', [ViewController::class, 'senateListOne'])->name('senate.list.one');
Route::get('/senate_list_two', [ViewController::class, 'senateListTwo'])->name('senate.list.two');
Route::get('/senate_list_three', [ViewController::class, 'senateListThree'])->name('senate.list.three');