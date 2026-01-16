<?php

use App\Http\Controllers\GiftController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', [GiftController::class, 'index']);
Route::resource('gifts', GiftController::class);

Route::get('/test', function () {
    Mail::raw('Ceci est un e-mail de test.', function ($message) {
        $message->to('test@example.com')
            ->subject('Test envoi de mail');
    });
});
