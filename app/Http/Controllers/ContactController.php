<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\Response;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $contacts = $user->contacts()->latest()->simplePaginate(5);


        return view('contacts.index', compact('contacts','user'));
    }

    public function create(Request $request)
    {

        $input = $request->all();

        Contact::create($input);
        return redirect()->back();
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);

        return view('contact.index')->with($contact);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email,' .$id ,
            'address' => 'required',
            'phone_number' => 'required'
        ]);

        $contact = Contact::findOrFail($id);

        $input = $request->all();

        $contact->fill($input)->save();

        return redirect()->back();
    }

    public function addPhoto($id, Request $request)
    {
        $contact = Contact::findOrFail($id);


        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('image'), $input['image']);

        $contact->update($input);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);

        $contact->delete();

        return redirect()->back();
    }
}
