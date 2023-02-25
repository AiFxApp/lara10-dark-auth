<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    //
    public function store(Request $request)
    {
        $subscriber = new Subscriber;
        $subscriber->name = $request->input('name');
        $subscriber->email = $request->input('email');
        $subscriber->save();

        return redirect()->back()->with('success', 'Thanks for subscribing!');
    }
}


