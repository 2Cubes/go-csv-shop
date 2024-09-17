<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RequestController extends Controller
{
    public function sendRequest(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'nullable|email',
            'comment' => 'nullable|string',
        ]);

        $data = $request->all();

        Mail::send('emails.request', $data, function($message) use ($data) {
            $message->to('sales@prom-elec.com')
                ->subject('Новая заявка от ' . $data['name']);
        });

        return redirect('/')->with('success', 'Спасибо! Мы ответим в ближайшее время!');
    }

    public function callRequest(Request $request)
    {
        $request->validate([
            'phone' => 'required',
        ]);

        $data = $request->all();

        Mail::send('emails.call', $data, function($message) use ($data) {
            $message->to('sales@prom-elec.com')
                ->subject('Заказ обратного звонка');
        });

        return redirect('/')->with('success', 'Спасибо! Мы ответим в ближайшее время!');
    }
}
