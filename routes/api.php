<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
use App\Events\NotificationEvent;

Route::post('/send_notification',[NotificationController::class,"send_notification"]);

Route::get('/send',function(){
    event(new NotificationEvent("hello","sachira"));
});
