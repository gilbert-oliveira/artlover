<?php

use App\Http\Controllers\Stripe\WebhookController;
use App\Http\Livewire\Admin\ProductsList;
use App\Http\Livewire\CheckoutPage;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('checkout', CheckoutPage::class);
Route::get('products', ProductsList::class);

Route::post('/stripe/webhook', [WebhookController::class, 'handleWebhook']);
