<?php

namespace App\Http\Controllers;
use App\Events\NotificationEvent;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function send_notification(Request $req)
    {
        $title = $req->title;
        $description = $req->description;

        try {
            event(new NotificationEvent($title,$description));

        } catch (\Throwable $th) {
            return response()->json(['status' => 'Error while broadcast']);
        }

        return response()->json(['status' => 'Notification broadcasted']);
    }
}
