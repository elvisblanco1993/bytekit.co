<?php

use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteInquiryController;
use Illuminate\Support\Facades\Storage;

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
    return view('web.home');
});

Route::post('/contact', [WebsiteInquiryController::class, 'save'])->name('inquiry.save');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    /**
     * Dashboard
     */
    Route::get('/dashboard', App\Http\Livewire\Dashboard::class)->name('dashboard');

    /**
     * Show All Customers
     */
    Route::get('/customers', App\Http\Livewire\Customer\Index::class)->name('customers');

    /**
     * Customer details
     */
    Route::get('/customers/{customer}', App\Http\Livewire\Customer\View::class)->name('customer.view');

    /**
     * Customer billing portal
     */
    Route::get('/customers/{customer}/billing', function (Customer $customer) {
        return $customer->redirectToBillingPortal(route('customer.view', ['customer' => $customer->id]));
    })->name('billing');

    /**
     * Show All Tickets
     */
    Route::get('/tickets', App\Http\Livewire\Ticket\Index::class)->name('tickets');

    /**
     * Ticket details
     */
    Route::get('/tickets/{ticket}', App\Http\Livewire\Ticket\Show::class)->name('ticket.show');

    /**
     * Download ticket attachments
     */
    Route::get('/attachment/{attachment}', function($attachment) {
        return Storage::download('attachments/'.$attachment);
    })->name('attachment.download');

    /**
     * Website inquiries
     */
    Route::get('/inquiries', App\Http\Livewire\Inquiry\Index::class)->name('inquiries');

});
