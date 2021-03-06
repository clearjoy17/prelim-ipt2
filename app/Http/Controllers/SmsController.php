<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function index()
    {
        Nexmo::message()->send([
            'to' => '+639084564652',
            'from' => 'sender',
            'text' => 'The verification has been sent to your email'
        ]);

        echo "Message Sent!";
    }
}
