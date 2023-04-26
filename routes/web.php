<?php
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CatalogController;
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

Auth::routes(['verify'=> true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/Logout', [LogoutController::class, 'perform'])->name('logout');
Route::get('/catalog', [CatalogController::class, 'index'])->name('Catalog.index');
Route::get('/Jersey', [HomeController::class, 'jersey'])->name('jersey.form');
// Inventory route
Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.index');
Route::get('/inventory/create', [InventoryController::class, 'create'])->name('inventory.create');
Route::post('/inventory', [InventoryController::class, 'store'])->name('inventory.store');
Route::get('/inventory/{id}', [InventoryController::class, 'show'])->name('inventory.show');
Route::get('/inventory/{id}/edit', [InventoryController::class, 'edit'])->name('inventory.edit');
Route::put('/inventory/{id}', [InventoryController::class, 'update'])->name('inventory.update');
Route::delete('/inventory/{id}', [InventoryController::class, 'destroy'])->name('inventory.destroy');
    
// Total sales route
Route::get('/total-sales', 'OrderController@totalSales')->name('order.total-sales');

// Pending orders route
Route::get('/pending-orders', 'OrderController@pendingOrders')->name('order.pending-orders');

// Pricing route
Route::get('/pricing', 'PricingController@index')->name('pricing.index');

// Proof of payment route
Route::get('/proof-of-payment', 'PaymentController@proofOfPayment')->name('payment.proof-of-payment');

// Fully paid orders route
Route::get('/fully-paid-orders', 'OrderController@fullyPaidOrders')->name('order.fully-paid-orders');




