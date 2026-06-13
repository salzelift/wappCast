<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ContactController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('admin.contact', compact('contacts'));
    }

    public function store(ContactRequest $request)
    {
        $contact = Contact::create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Contact successfully created!',
            'data' => $contact
        ], 201);
    }

    public function show(Contact $contact)
    {

        return $contact;
    }

    public function update(ContactRequest $request, Contact $contact)
    {

        $contact->update($request->validated());

        return $contact;
    }

    public function destroy(Contact $contact)
    {

        $contact->delete();

        return response()->json();
    }
}
