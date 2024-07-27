<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $category = Category::find($request->category_id);
        $tel = $request->tel1 . $request->tel2 . $request->tel3;
        $name = $request->last_name . ' ' . $request->first_name;
        $contact = $request->only([
        'last_name',
        'first_name',
        'category_id',
        'gender',
        'email',
        'tel1',
        'tel2',
        'tel3',
        'address',
        'building',
        'category_id',
        'detail'
        ]);
        $contact['name'] = $name;
        $contact['tel'] = $tel;
        return view('/confirm', compact('contact', 'category'));
    }

    public function store(Request $request)
    {
        $contact = $request->only([
        'last_name',
        'first_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'category_id',
        'detail'
        ]);
        Contact::create($contact);
        return view('thanks');
    }
}
