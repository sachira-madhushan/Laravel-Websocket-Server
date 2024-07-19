<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
use App\Events\NotificationEvent;

Route::post('/notify',[NotificationController::class,"sendNotification"]);
// Route::get('/send',function(){
//     event(new NotificationEvent("hello","sachira"));
// });
