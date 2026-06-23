<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();

        return view(
            'admin.contacts.index',
            compact('contact')
        );
    }

    public function create()
    {
        return view('admin.contacts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required',
        ]);

        Contact::create($request->all());

        return redirect()
            ->route('admin.contacts.index')
            ->with(
                'success',
                'Informasi kontak berhasil ditambahkan.'
            );
    }

    public function edit(Contact $contact)
    {
        return view(
            'admin.contacts.edit',
            compact('contact')
        );
    }

    public function update(
        Request $request,
        Contact $contact
    ) {

        $request->validate([
            'address' => 'required',
        ]);

        $contact->update(
            $request->all()
        );

        return redirect()
            ->route('admin.contacts.index')
            ->with(
                'success',
                'Informasi kontak berhasil diperbarui.'
            );
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return back()->with(
            'success',
            'Data berhasil dihapus.'
        );
    }
}
