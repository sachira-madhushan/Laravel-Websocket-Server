<?php

namespace App\Http\Controllers;
use App\Events\NotificationEvent;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendNotification()
    {
        $title = 'Title';
        $description = 'Description';

        try {
            event(new NotificationEvent($title,$descption));

        } catch (\Throwable $th) {
            return response()->json(['status' => 'Error']);
        }

        return response()->json(['status' => 'Event broadcasted']);
    }
}
