<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function index()
    {
        $contact = Contact::first();

        return view(
            'frontend.kontak',
            compact('contact')
        );
    }

    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        ContactMessage::create(
            $request->all()
        );

        return back()->with(
            'success',
            'Pesan berhasil dikirim.'
        );
    }
}
