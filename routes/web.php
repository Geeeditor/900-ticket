<?php

use App\Models\Event;
use App\Http\Controllers\Checkout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DynamicLogin;
use App\Http\Controllers\CartController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController\HomeController;
use App\Http\Controllers\AdminController\EventController;

// Route::any('/', function () {
//     return redirect()->route('index');
// });


Route::get('/home' , function () {
    return view('home');
})->name('home');

Route::post('/event/item', [CartController::class, 'storePartyTicket'])->name('event.addtocart');

// Route::get('/auth', [authController::class, 'index'])->name('login');

// Route::get('/auth/otp', function() {
//     return view('auth.auth');
// })->name('auth.otp')->middleware('auth');

// Route::post('/auth/login', [authController::class, 'login'])->name('auth.login');

// Route::post('/auth/register', [authController::class, 'register'])->name('auth.register');

// Route::get('/flight', function () {
//     return view('pages/flight-views/index');
// })->name('index.flight')->middleware('auth');

// Route::get('/logout', [authController::class, 'logout'])->name('logout');

Route::fallback(function() {
    return view('fallback');
});

Route::get('/dashboard', function () {

   return view('dashboard');

})->middleware('user')->name('dashboard');

Route::get('/product/checkout/{event}', [Checkout::class, 'checkoutPartyTicket'])->name('checkout.index');

Route::post('/product/checkout', [Checkout::class, 'getPartyTicketOrder'])->name('checkout.getOrder');



Route::post('/login/product/checkout', [Checkout::class, 'loginCheckout'])->name('checkout.getOrder.login');


Route::get('/welcome', function () {
    $events = Event::latest()->paginate(3);
    return view('welcome', ['events' => $events]);
    })->name('index');

// Route::get('/')

Route::middleware('admin')->group(function() {

    Route::get('/admin', [HomeController::class, 'dashboard'])->name('admin.index');

    Route::get('/admin/events/create', [EventController::class, 'create'])->name('admin.create.event');

    Route::post('/admin/events/create/store', [EventController::class, 'store'])->name('admin.create.store');

    Route::get('/admin/events', [EventController::class, 'view'])->name('admin.events');

    Route::get('/admin/events/edit', [EventController::class, 'editEventList'])->name('admin.events.list.edit');

    Route::get('/admin/events/view/{id}', [EventController::class, 'show'])->name('admin.event.view');

    Route::get('/admin/events/edit/{id}', [EventController::class, 'edit'])->name('admin.events.edit');

    Route::put('/admin/events/update/{id}', [EventController::class, 'update'])->name('admin.events.edit.update');

    Route::get('/admin/manage-users', [HomeController::class, 'userList'])->name('admin.users');

    Route::delete('/admin/events/delete/{id}', [EventController::class, 'destroy'])->name('admin.events.delete');

});



/* Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth', 'admin'])->name('dashboard'); */



// Route::get('/events/latest', [EventsController::class, 'showEvents'])->name('events.index');

// Route::get('/events/latest', [EventsController::class, 'showEvents'])->name('events.index');

Route::get('/event', function () {
    $latestEvents = Event::latest()->take(18)->paginate(3); // Get the latest 18 posts as a collection
    $featuredEvents = Event::where('category', 'featured')->latest()->paginate(3); // Get featured events with pagination
    $allEvents = Event::paginate(3); // Paginate all events

    return view('pages.events.index', compact('latestEvents', 'featuredEvents', 'allEvents'));

    // dd($latestEvents, $featuredEvents, $allEvents);
})->name('event.index');

Route::get('/event/item/{event}', function (Event $event) {
   
    if (!$event) {
        return redirect()->back()->with('error', 'Party ticket not found.');
    }
    // dd($event);
    return view('pages.events.metadata', ['event' => $event]);
})->name('event.metadata');

// Route::get('/event', function () {
//     return view('pages\events\');
// })->name('event.index');



// Route::get('/events/view/{id}', [EventsController::class, 'viewEvents'])->name('events.view');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
