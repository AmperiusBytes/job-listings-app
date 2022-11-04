<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use PhpParser\Node\Expr\List_;

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

//All Listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Lastest Listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/listing/{id}', function($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});