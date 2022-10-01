<?php

namespace App\Http\Controllers;

use App\Mail\SendContactInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailInformation extends Controller
{
    public function sendContactInformation (Request $request) {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:40'],
            'email' => ['required', 'email', 'max:80'],
            'message' => ['required', 'string', 'max:255'],
        ]);

        $details = [
            'name' => $data['name'],
            'email' => $data['email'],
            'message' => $data['message']
        ];


        Mail::to('ramz.162025@gmail.com')->send(new SendContactInformation($details));

        return redirect()->back()->with('success', '¡Tu informacion ha sido enviada con éxito!');
    }
}
